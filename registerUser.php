<?php
session_start();
require_once "db/dbConnect.php";

if (isset($_POST["submit"])){
    $firstname = ucwords(strtolower(addslashes($_POST["firstname"])));
    $lastname = ucwords(strtolower(addslashes($_POST["lastname"])));
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $phoneno = $_POST["phoneNo"];

    $hashedpass = password_hash($password, PASSWORD_DEFAULT);

    $sqlst = "INSERT INTO users(firstname, lastname, password, gender, location, phoneno) VALUES('$firstname', '$lastname', '$hashedpass', '$gender', '$location', '$phoneno');";

    if($conn->query($sqlst) === TRUE){
        header("Location: viewUsers.php");
    }
    else{
        echo "Error" . $sqlst . "<br>" . $conn->error;
    }
}
?>