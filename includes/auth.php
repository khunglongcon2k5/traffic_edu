<?php
session_start();
require_once 'config.php';
require_once 'user_functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['message'] = 'Yêu cầu không hợp lệ!';
    header('Location: ../index.php');
    exit;
}

if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($user && verifyPassword($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'role' => $user['role']
        ];
        $_SESSION['is_admin'] = $user['role'] === 'admin';
        $_SESSION['message'] = 'Đăng nhập thành công!';

        $redirect = $user['role'] === 'admin' ? '../admin/dashboard.php' : '../index.php';
        header('Location: ' . $redirect);
    } else {
        $_SESSION['message'] = 'Tên đăng nhập hoặc mật khẩu không đúng!';
        header('Location: ../index.php');
    }
    exit;
}

if (isset($_POST['action']) && $_POST['action'] === 'register') {
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        $_SESSION['message'] = 'Mật khẩu không khớp!';
        header('Location: ../index.php');
        exit;
    }

    if (checkUserExists($username, $email)) {
        $_SESSION['message'] = 'Tên đăng nhập hoặc email đã tồn tại!';
        header('Location: ../index.php');
        exit;
    }

    if (addUserAccount($name, $username, $email, $password, 'user')) {
        $_SESSION['message'] = 'Đăng ký thành công! Vui lòng đăng nhập.';
    } else {
        $_SESSION['message'] = 'Đăng ký thất bại! Vui lòng thử lại.';
    }
    header('Location: ../index.php');
    exit;
}

$conn->close();
