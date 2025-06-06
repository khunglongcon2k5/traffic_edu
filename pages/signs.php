<?php
session_start();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lý thuyết toàn diện </title>
    <link rel="stylesheet" href="../assets/css/theory.css">
</head>

<body>
    <form action="">
        <header class="header">
            <h1 style="font-size: 40px;">HỌC LÝ THUYẾT THI LÁI XE MÔ TÔ</h1>
            <p style="font-size: 20px;">Nắm vững kiến thức, lái xe an toàn </p>
        </header>
        <nav class="menu">
            <div class="div-menu">
                <ul style="text-align: center;">
                    <li><a href="home.php">Trang chủ</a></li>
                    <li><a href="rules.php">Luật giao thông</a></li>
                    <li><a href="signs.php">Biển báo</a></li>
                    <li><a href="penalties.php">Xử phạt</a></li>
                    <li><a href="quiz.php">Kiểm tra</a></li>
                    <!-- Bỏ dấu gạch chân từ tags trên, sd thuộc tính "text-decoration: none;" áp dụng cho các thẻ <a> -->
                    <?php if (isset($_SESSION['user'])): ?> <div class="user-info">
                            <i class="fa-solid fa-user-tie"></i><?php echo htmlspecialchars($_SESSION['user']['name']); ?>
                            <a href="../includes/logout.php" class="btn btn-logout">Đăng xuất</a>
                        </div>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <div id="main-content" class="content"
            style="font-size: 20px; padding: 20px; margin: 20px auto; max-width: 800px; background-color: #f8f9fa; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #df6915;">Biển báo Giao thông </h2>
            <hr>
            <div>
                <p><b>Biển báo giao thông đường bộ </b>hay còn được gọi là hệ thống báo hiệu đường bộ là hệ thống rất
                    nhiều biển báo giao thông cung cấp thông tin cụ thể cho <b>người tham gia giao thông</b> và được
                    chia thành 6 nhóm chính sau: </p>
                <p><b>Tác dụng: </b>Đây là loại biển báo giao thông để biểu thị các điều cấm. Người tham gia giao thông
                    phải chấp hành các điều đã được báo trên biển. Nhóm biển báo cấm gồm 39 kiểu, bao gồm các biển báo
                    giao thông được đánh số từ 101 đến 139.</p>
            </div>
            <div>
                <ol>
                    <li>
                        <b>Biển báo cấm.</b>
                        <p>Biển báo cấm có dạng: Hình tròn, viền đỏ, nền trắng, trên nền có hình vẽ/ chữ số, chữ viết
                            màu đen (ngoại trừ một số trường hợp đặc biệt). Biển báo cấm có mã <i style="color: red;">P
                                (cấm)</i> và <i style="color: red;">DP (hết cấm)</i>.</p>
                        <image
                            src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/bi%E1%BB%83n-b%C3%A1o-c%E1%BA%A5m-%C4%91%C6%B0%E1%BB%9Dng-b%E1%BB%99.jpg"
                            style="margin: 10px 70px 50px 70px; width: 600px; height: 500px;"></image>
                    </li>
                    <li>
                        <b>Biển báo nguy hiểm. </b>
                        <p>Biển báo Nguy hiểm có dạng: hình tam giác đều, đường viền đỏ, nền vàng, nội dung và hình vẽ
                            màu đen.</p>
                        <p><b>Tác dụng:</b> Biển báo nguy hiểm để cảnh báo các tình huống nguy hiểm có thể xảy ra được
                            dùng để báo cho người sử dụng đường, chủ yếu là người lái xe cơ giới biết được tính chất của
                            sự nguy hiểm trên tuyến đường phía trước để phòng ngừa. Khi gặp biển báo nguy hiểm người lái
                            xe phải<b> giảm tốc độ.</b></p>
                        <image
                            src="https://bizweb.dktcdn.net/100/415/690/files/cac-nhom-bien-bao-giao-thong-3.jpg?v=1665805557437.jpg"
                            style="margin: 10px 70px 50px 70px; width: 600px; height: 600px;"></image>
                    </li>
                    <li>
                        <p><b>Biển báo hiệu lệnh. </b>Có dạng: Hình tròn, nền xanh lam với hình vẽ màu trắng.</p>
                        <p><b>Tác dụng: </b>Báo các hiệu lệnh cho người tham gia giao thông phải chấp hành các hiệu lệnh
                            trên biển báo (trừ một số trường hợp đặc biệt). Biển báo hiệu lệnh gồm 10 kiểu và được đánh
                            số thứ tự từ 301 đến 310.</p>
                        <image src="https://proauto.vn/wp-content/uploads/2024/04/bien-bao-hieu-lenh-1.png"
                            style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                    </li>
                    <li>
                        <p><b>Biển báo chỉ dẫn. </b></p>
                        <p>Biển báo chỉ dẫn có dạng: Hình vuông hoặc hình chữ nhật, nền xanh, hình vẽ màu trắng.</p>
                        <p><b>Tác dụng: </b>Hướng dẫn cho người tham gia giao thông biết những hướng cần thiết hoặc
                            những điều có ích khác, giúp họ tham gia giao thông thuận lợi trên đường.</p>
                        <image src="https://baogiaothong.mediacdn.vn/files/dung.pham/2016/05/04/11-1539.jpg"
                            style="margin: 10px 70px 40px 70px; width: 600px; height: 600px;"></image>
                    </li>
                    <li>
                        <p><b>Biển báo phụ </b></p>
                        <p>Biển báo phụ Có dạng hình vuông hoặc hình chữ nhật, viền đen, nền trắng, hình vẽ màu đen,
                            thường nằm dưới các biển chính để bổ sung làm rõ ý nghĩa các biển chính.</p>
                        <p>Biển phụ thường được kết hợp cùng với các loại biển báo giao thông khác như biển báo cấm,
                            biển báo nguy hiểm, biển chỉ dẫn và biển báo hiệu lệnh để thuyết minh rõ hơn về các biển đó.
                        </p>
                        <image
                            src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/Bi%E1%BB%83n-b%C3%A1o-ph%E1%BB%A5.jpg"
                            style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                    </li>
                    <li>
                        <p><b>Biển báo Vạch kẻ đường</b></p>
                        <p>Vạch kẻ đường cũng được coi là một dạng biển báo giao thông nhằm hướng dẫn, điều khiển giao
                            thông trên đường giúp đảm bảo khả năng thông xe cũng như an toàn cho người tham gia giao
                            thông.</p>
                        <p>Vạch kẻ đường có 2 loại là vạch kẻ đường nằm đứng và vạch kẻ đường nằm ngang</p>
                        <image
                            src="https://vantaitruonggiang.vn/wp-content/uploads/2017/10/V%E1%BA%A1ch-k%E1%BA%BB-%C4%91%C6%B0%E1%BB%9Dng.jpg"
                            style="margin: 10px 70px 50px 70px; width: 600px; height: 400px;"></image>
                    </li>
                </ol>
            </div>
        </div>

        <footer class="footer">
            <p>Hệ thống Học Lý thuyết Giao thông Đường bộ © 2025</p>
            <p>Phát triển với mục đích nâng cao kiến thức về luật giao thông đường bộ</p>
        </footer>
    </form>
</body>

</html>