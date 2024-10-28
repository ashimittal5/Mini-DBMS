<?php
include 'database.php';

$full_name = $_POST['full_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$medical_history = $_POST['medical_history'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

$sql = "INSERT INTO user (full_name, age, gender, email, contact_number, address, medical_history, username, password)
        VALUES ('$full_name', '$age', '$gender', '$email', '$contact_number', '$address', '$medical_history', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='login.php'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
