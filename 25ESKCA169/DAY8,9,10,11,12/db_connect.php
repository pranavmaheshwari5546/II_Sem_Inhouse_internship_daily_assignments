<?php
$host = "127.0.0.1";
$user = "root";
$password = "pranav142007@";
$database = "skit";
$port = 3306;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>