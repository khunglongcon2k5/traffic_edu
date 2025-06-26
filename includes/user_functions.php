<?php
require_once 'config.php';

function createPasswordHash($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

function addUserAccount($name, $username, $email, $password, $role = 'user')
{
    global $conn;

    $hashed_password = createPasswordHash($password);
    $stmt = $conn->prepare("INSERT INTO `users` (`name`, `username`, `email`, `password`, `role`) VALUES (?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sssss", $name, $username, $email, $hashed_password, $role);
        $success = $stmt->execute();
        $stmt->close();
        return $success;
    }

    return false;
}

function checkUserExists($username, $email)
{
    global $conn;

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");

    if ($stmt) {
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows > 0;
        $stmt->close();
        return $exists;
    }

    return false;
}
