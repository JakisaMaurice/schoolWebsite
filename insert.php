<?php
include "connect.php";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// $feedback = $_POST['feedback'];

// SQL query to insert data
$sql = "INSERT INTO table1 (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header ("Location: contact.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>