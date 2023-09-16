<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gitexercise";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("CONNECTION ERROR " . $conn->connect_error);
}
?>