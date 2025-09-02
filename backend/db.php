<?php

class db {
    public static function open() {
        $host = envv('DATABASE_HOST');
        $username = envv('DATABASE_USERNAME');
        $password = envv('DATABASE_PASSWORD');
        $databaseName = envv('DATABASE_NAME');

        $conn = mysqli_connect($host, $username, $password, $databaseName) or die("Could not connect to the database");

        return $conn;
    }

    public static function close($conn) {
        mysqli_close($conn);
    }
}

?>
