<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "playground";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
?>
