<?php
session_start();

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
    $_SESSION['message'] = 'Vui lòng đăng nhập để truy cập trang này!';
    header('Location: ../index.php?sidebar=auth');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ôn tập lý thuyết bằng lái xe máy A1 - A2</title>
    <link rel="stylesheet" href="../assets/css/chon.css" />
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="../assets/img/logo.svg">
</head>

<body>
    <div class="main-content">
        <?php include './widget/header.php'; ?>
        <div>

        </div>
        <div class="luachon">
            <h2>Chọn chức năng</h2>
            <div class="button-groups">
                <p>Bạn đang học lý thuyết bằng lái xe nào ?</p>
                <button type="button" onclick="location.href='chondeA1.php'">Ôn tập đề thi A1</button>

                <button type="button" onclick="location.href='chondeA2.php'">Ôn tập đề thi A2</button>
                <p>Hãy lựa chọn ôn tập đề thi phù hợp với mong muốn của bạn nhé !</p>
                <button class="btn-blue" onclick="location.href='../index.php'">Trở Về</button>
            </div>
        </div>
        <?php include './widget/footer.php'; ?>
    </div>

</body>

</html>