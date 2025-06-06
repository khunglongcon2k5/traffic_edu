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
            <h1 style="font-size: 50px;">HỌC LÝ THUYẾT THI LÁI XE MÔ TÔ</h1>
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
            <h2 style="color: #df6915;">Chào mừng đến với Hệ thống học Lý thuyết Giao thông đường bộ </h2>
            <hr style="border-bottom: 1px;">
            <div>
                <p>Hệ thống này được thiết kế để giúp bạn học và nắm vững các kiến thức cần thiết để thi sát hạch lái xe
                    mô tô. Chúng tôi cung cấp các tài liệu học tập, bài kiểm tra và thông tin hữu ích để bạn tự tin vượt
                    qua kỳ thi.</p>
                <p>Chúng tôi hy vọng rằng hệ thống này sẽ giúp bạn có được những kiến thức cần thiết để lái xe an toàn
                    và tuân thủ luật giao thông đường bộ. Thông qua bài viết này, bạn có thể: </p>
                <ul>
                    <li>Tìm hiểu về các quy định trong luật giao thông đường bộ.</li>
                    <li>Học cách nhận biết và hiểu ý nghĩa của các loại biển báo giao thông.</li>
                    <li>Nắm rõ các mức xử phạt đối với các hành vi vi phạm giao thông.</li>
                    <li>Tham gia các bài kiểm tra để đánh giá kiến thức của bạn.</li>
                    <li>Luyện tập xử lí các tình huống giao thông thực tế.</li>
                    <li>Liên hệ với chúng tôi để được hỗ trợ và tư vấn thêm.</li>
                </ul>
            </div>
            <div>
                <p style="border-left: 5px solid rgb(8, 127, 8); background-color: rgb(218, 226, 203); padding: 2px">
                    <u style="color: red"><b>Lưu ý:</b></u> Hệ thống này dựa trên Luật Giao thông đường bộ Việt Nam hiện
                    hành. Hãy thường xuyên cập nhật kiến thức để đảm bảo nắm vững các quy định mới nhất.
                </p>
            </div>

            <image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoPH_1RhKdvhHamAW-FiUWqrNn-yTdIuALcg&s"
                alt="Học lý thuyết giao thông"
                style="width: 50%; max-height: 300px; object-fit: cover; margin-bottom: 10px; padding: 5px 200px;">
            </image>

            <div>
                <h3 style="color: red;">🔍Hệ thống của chúng tôi có gì đặc biệt?</h3>
                <ul>
                    <li>✅<b>Bộ 200 câu hỏi chuẩn bộ GTVT</b> - được cập nhật đầy đủ năm 2025. </li>
                    <li>✅<b>Học lý thuyết theo từng chủ đề:</b> biển báo, sa hình, luật giao thông, văn hóa khi tham gia
                        giao thông,...</li>
                    <li>✅<b>Thi thử mô phỏng bài thi thật, </b>có đồng hồ bấm giờ, kết kết quả chấm điểm tức thì. </li>
                    <li>✅<b>Giải thích chi tiết từng đáp án </b>- giúp bạn hiểu bản chất thay vì học vẹt. </li>
                    <li>✅<b>Thống kê kết quả thi</b> - giúp bạn theo dõi quá trình học tập của mình.</li>
                </ul>
            </div>
            <div>
                <h3 style="color: red;">💡 Vì sao nên học tại đây?</h3>
                <ul>
                    <li>Hệ thống bài kiểm tra đa dạng, sát với thực tế.</li>
                    <li>Cập nhật liên tục các quy định mới nhất về luật giao thông.</li>
                    <li><b>Tiện lợi: </b>Hỗ trợ học tập mọi lúc, mọi nơi trên nhiều thiết bị. </li>
                    <li><b>Miễn phí 100%: </b>Không thu bất kì khoản phí nào cho phần học lý thuyết cơ bản. </li>
                    <li><b>Hiệu quả cao: </b>Giao diện trực quan, thân thiện, dễ sử dụng, dễ học, dễ nhớ. </li>
                    <li><b>Có thống kê quá trình học </b><i>(nếu đăng ký tài khoản) </i> để bạn biết mình còn yếu phần
                        nào và cần luyện thêm. </li>
                </ul>
            </div>
            <div>
                <p>👉<b>Tham gia ngay hôm nay </b>để chinh phục kỳ thi bằng lái mô tô một cách tự tin và dễ dàng! </p>
            </div>
            <hr>
            <div style="text-align: center; margin-top: 20px;">
                <p>Theo dõi chúng tôi:</p>
                <a href="https://facebook.com" target="_blank" style="margin-right: 10px;">Facebook</a>
                <a href="https://twitter.com" target="_blank" style="margin-right: 10px;">Twitter</a>
                <a href="mailto:support@example.com">Email</a>
            </div>
        </div>


        <footer class="footer">
            <p>Hệ thống Học Lý thuyết Giao thông Đường bộ © 2025</p>
            <p>Phát triển với mục đích nâng cao kiến thức về luật giao thông đường bộ</p>
        </footer>
    </form>

</body>

</html>