<?php
include '../includes/db.php';

$email = "sai@example.com";
$password = "123";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$role = "admin";

// Only insert into columns that exist in your 'users' table
$stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
$stmt->execute([$email, $hashedPassword, $role]);

echo "Admin user created successfully!";
?>
