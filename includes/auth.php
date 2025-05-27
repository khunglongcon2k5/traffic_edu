<?php
session_start();
header('Content-Type: application/json');
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['message' => 'Yêu cầu không hợp lệ', 'errorField' => 'general']);
    exit;
}

$action = $_POST['action'] ?? '';
if ($action === 'login') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if (!$username || !$password) {
        echo json_encode(['message' => 'Thiếu thông tin', 'errorField' => !$username ? 'loginUsername' : 'loginPassword']);
        exit;
    }

    $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'email' => $user['email']];
        echo json_encode(['message' => 'Đăng nhập thành công', 'redirect' => 'index.php']);
    } else {
        echo json_encode(['message' => 'Tên đăng nhập hoặc mật khẩu không đúng', 'errorField' => 'loginPassword']);
    }
    $stmt->close();
} elseif ($action === 'register') {
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if (!$name || !$username || !$email || !$password || !$confirmPassword) {
        echo json_encode(['message' => 'Thiếu thông tin', 'errorField' => !$name ? 'registerName' : (!$username ? 'registerUsername' : (!$email ? 'registerEmail' : (!$password ? 'registerPassword' : 'confirmPassword')))]);
        exit;
    }

    if ($password !== $confirmPassword) {
        echo json_encode(['message' => 'Mật khẩu không khớp', 'errorField' => 'confirmPassword']);
        exit;
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        echo json_encode(['message' => 'Tên đăng nhập hoặc email đã tồn tại', 'errorField' => 'registerUsername']);
        $stmt->close();
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $username, $email, $hashedPassword);
    if ($stmt->execute()) {
        echo json_encode(['message' => 'Đăng ký thành công']);
    } else {
        echo json_encode(['message' => 'Đăng ký thất bại', 'errorField' => 'general']);
    }
    $stmt->close();
}