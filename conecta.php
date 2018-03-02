<?php
header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gerenciador";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
      

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>