<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "artgallerydb";
$port = 3308;

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
