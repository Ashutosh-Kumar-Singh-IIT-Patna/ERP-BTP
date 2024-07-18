<?php
// Include the database connection file
include 'db.php';

// Retrieve POST data and hash the password
$name = $_POST["name"];
$rollno = $_POST["rollno"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

// Prepare the SQL statement
$sql = "INSERT INTO students (name, rollno, password) VALUES (?,?,?)";

// Initialize a prepared statement
$stmt = $conn->prepare($sql);

// Check if the prepare statement was successful
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters to the placeholders
$stmt->bind_param("sss", $name, $rollno, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "User registered successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>