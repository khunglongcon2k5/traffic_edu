<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SESSION['user']['id']) || !isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['message' => 'Yêu cầu không hợp lệ']);
    exit;
}

session_unset();
session_destroy();
echo json_encode(['message' => 'Đăng xuất thành công', 'redirect' => '../index.php']);