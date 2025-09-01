<?php

class db {
    public static function open() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $databaseName = "leo_cybsec";

        $conn = mysqli_connect($host, $username, $password, $databaseName) or die("Could not connect to the database");

        return $conn;
    }

    public static function close($conn) {
        mysqli_close($conn);
    }
}

?>