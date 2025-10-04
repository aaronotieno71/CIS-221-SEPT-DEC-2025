<?php
$servername = "localhost";
$username = "root";
$password = ""; // leave empty — do NOT add spaces
$database = "fushion_store"; // or fashion_store if renamed

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
