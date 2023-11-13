<?php

include 'conn.php'; 
// Retrieve form data and sanitize inputs
$domain_code = $_POST['domain'];
$course =  $_POST['course'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$ip = mysqli_real_escape_string($conn, $_POST['ip']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$number = mysqli_real_escape_string($conn, $_POST['number']);

// Prepare and execute SQL query
$sql = "INSERT INTO tblstureg (domain_code, course_code,name, email, age, dob, state, ip, gender, number) VALUES ('$domain_code', '$course','$name', '$email', '$age', '$dob', '$state', '$ip', '$gender','$number')";

if ($conn->query($sql) === TRUE) {
    ?><h1 align="center">New Student Record created successfully</h1><?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
