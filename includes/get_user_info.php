<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SESSION['user']['id'])) {
    echo 'Yêu cầu không hợp lệ';
    exit;
}

$userId = $_SESSION['user']['id'];
$stmt = $conn->prepare("SELECT name, email FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

if ($user) {
    echo 'Tên: ' . htmlspecialchars($user['name']) . "\n";
    echo 'Email: ' . htmlspecialchars($user['email']);
} else {
    echo 'Không tìm thấy thông tin';
}

$conn->close();
