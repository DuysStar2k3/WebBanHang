<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysqli = new mysqli($servername, $username, $password, "db_webbanhang");
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>