<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iep";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8'); //duomenu bazes pasirinkimas

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>