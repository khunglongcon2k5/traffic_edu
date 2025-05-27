<?php
session_start();
header('Content-Type: application/json');
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SESSION['user']['id']) || !isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['message' => 'Yêu cầu không hợp lệ', 'errorField' => 'general']);
    exit;
}

$currentPassword = $_POST['currentPassword'] ?? '';
$newPassword = $_POST['newPassword'] ?? '';
$confirmNewPassword = $_POST['confirmNewPassword'] ?? '';

if (!$currentPassword || !$newPassword || !$confirmNewPassword) {
    echo json_encode(['message' => 'Thiếu thông tin', 'errorField' => !$currentPassword ? 'currentPassword' : (!$newPassword ? 'newPassword' : 'confirmNewPassword')]);
    exit;
}

if ($newPassword !== $confirmNewPassword) {
    echo json_encode(['message' => 'Mật khẩu mới không khớp', 'errorField' => 'confirmNewPassword']);
    exit;
}

$userId = $_SESSION['user']['id'];
$stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if (!$user || !password_verify($currentPassword, $user['password'])) {
    echo json_encode(['message' => 'Mật khẩu hiện tại không đúng', 'errorField' => 'currentPassword']);
    $stmt->close();
    exit;
}

$hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
$stmt->bind_param("si", $hashedNewPassword, $userId);

if ($stmt->execute()) {
    echo json_encode(['message' => 'Đổi mật khẩu thành công']);
} else {
    echo json_encode(['message' => 'Đổi mật khẩu thất bại', 'errorField' => 'general']);
}

$stmt->close();