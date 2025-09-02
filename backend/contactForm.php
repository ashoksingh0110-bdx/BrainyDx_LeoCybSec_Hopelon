<?php

require ('db.php');
require ('constants.php');
require ('email.php');

$name = $phone = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname   = isset($_POST["fname"]) ? formatInput($_POST["fname"]) : "";
    $lname   = isset($_POST["lname"]) ? formatInput($_POST["lname"]) : "";
    $email   = isset($_POST["email"]) ? formatInput($_POST["email"]) : "";
    $phone   = isset($_POST["phone"]) ? formatInput($_POST["phone"]) : "";
    $message = isset($_POST["message"]) ? formatInput($_POST["message"]) : "";

    $name = trim($fname . ' ' . $lname);
    $ip = getIpAddress();

    $errors = [];
    if ($name === "")   { $errors[] = "Name is required."; }
    if ($email === "")  { $errors[] = "Email is required."; }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Invalid email."; }
    if ($phone === "")  { $errors[] = "Phone is required."; }

    if (!empty($errors)) {
        header('Content-Type: text/plain; charset=utf-8');
        echo "Error:\n" . implode("\n", $errors);
        exit;
    }

    $conn = db::open();

    $query = "INSERT INTO ".TABLE_CONTACT_FORM." (name,phone,email,message,ip)
        VALUES ('$name','$phone','$email','$message','$ip')";

    $result = mysqli_query($conn, $query) or die("Error: ".mysqli_errno($conn));

   if ($result) {
        $data = [
            'name'    => $name,
            'phone'   => $phone,
            'email'   => $email,
            'message' => $message,
        ];
        
        $okAdmin = adminEmail($data);
        $okUser  = userEmail($data);

        $target = dirname($_SERVER['SCRIPT_NAME']) . '/../thank-you.php';
        header('Location: ' . $target);
        exit;
        
    } else {
        echo "Error saving data";
    }

    db::close($conn);
}
else {
    die("Crash landing!");
}

function formatInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function getIpAddress() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = explode(',', getenv('HTTP_X_FORWARDED_FOR'))[0];
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>