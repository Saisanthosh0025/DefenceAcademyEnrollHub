<?php

include 'conn.php'; 
// Retrieve form data and sanitize inputs
$domain = $_POST['domain'];
$tea_mod =  $_POST['tea_mod'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$hd = mysqli_real_escape_string($conn, $_POST['hd']);
$exp = mysqli_real_escape_string($conn, $_POST['exp']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$pno = mysqli_real_escape_string($conn, $_POST['number']);

// Prepare and execute SQL query
$sql = "INSERT INTO tblfacreg (name, email, domain, tea_mod, exp, hd, gender, pno, age) VALUES ('$name', '$email', '$domain', '$tea_mod', '$exp', '$hd', '$gender', '$pno', '$age')";

if ($conn->query($sql) === TRUE) {
    ?><h1 align="center"> New Faculty Record created successfully !!</h1><?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
