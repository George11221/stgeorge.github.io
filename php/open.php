<?php
require 'connection.php';

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM regestration_table WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

// Get the result of the query
$result = $stmt->get_result();

if ($result->num_rows === 1) {
  // User found, verify the password
  $row = $result->fetch_assoc();
  $hashedPassword = $row['password'];

  if (password_verify($password, $hashedPassword)) {
    // Password is correct
    echo "Login successful!";
  } else {
    // Password is incorrect
    echo "Incorrect password.";
  }
} else {
  // User not found
  echo "User not found.";
}

// Close the statement and the database connection
$stmt->close();
exit();
