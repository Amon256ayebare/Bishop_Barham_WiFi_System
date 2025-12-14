<?php
session_start();
include "../includes/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM admins WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    if (password_verify($password, $admin['password'])) {
        $_SESSION['admin'] = $admin['username'];
        $_SESSION['role'] = $admin['role'];
        header("Location: dashboard.php");
        exit();
    }
}

header("Location: index.php?error=1");
