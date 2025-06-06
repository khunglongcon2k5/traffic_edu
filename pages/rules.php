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
            <h2 style="color: #df6915;"> Luật Giao thông Đường bộ </h2>
            <hr>
            <p>Luật Giao thông Đường bộ là một bộ quy tắc và quy định được thiết lập để điều chỉnh hành vi của người
                tham gia giao thông trên đường bộ. Mục tiêu chính của luật này là đảm bảo an toàn cho tất cả các phương
                tiện và người tham gia giao thông, bao gồm cả người đi bộ, xe đạp, xe máy, ô tô và các loại phương tiện
                khác.</p>
            <div>
                <h3>Các quy tắc cơ bản</h3>
                <ul>
                    <li>Người tham gia giao thông phải tuân thủ các biển báo và tín hiệu giao thông; phải chú ý quan
                        sát, giữ khoảng cách an toàn và đi đúng phần đường quy định.</li>
                    <li>Người lái xe phải có giấy phép lái xe hợp lệ và phương tiện phải được đăng ký và kiểm định.</li>
                    <li>Các phương tiện giao thông phải chạy đúng làn đường và tốc độ quy định; chấp hành đúng các quy
                        định khi qua nơi giao nhau. </li>
                    <li>Không được lái xe khi đã uống rượu bia hoặc sử dụng chất kích thích.</li>
                </ul>
            </div>
            <div>
                <image
                    src="https://cdn-blog.saladin.vn/contents/2025/01/04220416/luat-giao-thong-2025-tang-muc-xu-phat-vi-pham-giao-thong-tu-ngay-01-01-2025.jpg"
                    alt="Ảnh người dân tham gia giao thông."
                    style="width: 100%; height: 500px; display: block; margin: auto;"></image>
                <p style="font-size: 18px; text-align: center;"><i>Ảnh người dân tham gia giao thông.</i></p>
            </div>
            <div>
                <h3>Quy tắc lưu thông cơ bản </h3>
                <ol>
                    <li><b>Phần đường và làn đường: </b>Người và phương tiện tham gia giao thông đường bộ đi về bên phải
                        theo chiều đi của mình, đi đúng làn đường, phần đường quy định.</li>
                    <li><b>Vận tốc và khoảng cách: </b>Người lái xe phải giữ khoảng cách an toàn phù hợp với xe chạy
                        liền trước để tránh va chạm khi xe trước chuyển hướng hoặc dừng đột ngột.</li>
                    <li><b>Vượt xe:</b> Xe phải vượt về bên trái, trừ trường hợp đặc biệt. Xe bị vượt không được tăng
                        tốc độ và phải giảm tốc độ khi cần thiết.</li>
                    <li><b>Dừng và đỗ xe: </b> Không dừng xe, đỗ xe trên phần đường xe chạy, đường giao nhau, đường bộ
                        trong hầm, đường cao tốc, tại nơi đường cong hoặc nơi tầm nhìn bị che khuất.</li>
                </ol>
            </div>
            <div>
                <image
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAYeIoy2DEM9R0C0P4OqfITo6mP2uKFjgYHKBvI2IZrS96zWrsIwJkUu9ksmmO5bqr8eI&usqp=CAU.jpg"
                    style="weight: 100%; height: 300px; display: block; margin: 20px 150px;"></image>
            </div>
            <div
                style="background-color: rgb(217, 246, 241); border-left: 5px solid  rgb(5, 123, 104); margin: 10px 0; padding: 10px;">
                <b>Quy định về nồng độ cồn:</b> Người điều khiển phương tiện giao thông đường bộ mà trong máu hoặc hơi
                thở có nồng độ cồn sẽ bị xử phạt theo quy định của pháp luật. Đối với xe ô tô, máy kéo, xe máy chuyên
                dùng thì không được phép có nồng độ cồn.
            </div>
            <div>
                <h3>Quy định về tốc độ tối đa</h3>
                <img src="https://cdn.thuvienphapluat.vn//uploads/tintuc/2022/03/02/toc-do-toi-da-cua-cac-loai-xe.jpg">
                </image>
                <p style="font-size: 18px; text-align: center; "><i>Tốc độ tối đa của các loại xe khi tham gia giao
                        thông năm 2024.</i></p>
                <ol>
                    <li>
                        <p><b>Tốc độ tối đa của xe máy (xe mô tô) khi tham gia giao thông </b></p>
                        <p>- Tốc độ tối đa của xe máy <b>trong khu vực đông dân cư:</b></p>
                        <p> + Đường đôi; đường một chiều có từ hai làn xe cơ giới trở lên: 60 km/h.</p>
                        <p> + Đường hai chiều; đường một chiều có một làn xe cơ giới: 50 km/h.</p>
                        <p>- Tốc độ tối đa của xe máy <b>ngoài khu vực đông dân cư:</b></p>
                        <p> + Đường đôi, đường một chiều có từ hai làn xe cơ giới trở lên: 70km/h.</p>
                        <p> + Đường hai chiều, đường một chiều có một làn xe cơ giới: 60km/h.</p>
                    </li>
                    <li>
                        <p><b>Tốc độ tối đa của xe gắn máy khi tham gia giao thông </b></p>
                        <p> Tốc độ không quá 40km/h.</p>
                    </li>
                    <li>
                        <p><b>Tốc độ tối đa của xe ô tô khi tham gia giao thông </b></p>
                        <p>- Tốc độ tối đa cuae xe ô tô <b>trong khu vực đông dân cư </b>(trừ đường cao tốc): </p>
                        <p> + Đường đôi, đường một chiều có từ hai làn xe cơ giới trở lên: 60km/h.</p>
                        <p> + Đường hai chiều, đường một chiều có một làn xe cơ giới: 50km/h.</p>
                        <p>- Tốc độ tối đa của xe ô tô <b>ngoài khu khực đông dân cư </b>(trừ đường cao tốc):</p>
                        <table border="1" style="border-collapse: collapse; width: 100%; text-align: center;">
                            <!-- border-collapse: collapse; chỉ còn khung đường viền bên ngoài  -->
                            <thead>
                                <tr>
                                    <th rowspan="2">Loại xe</th>
                                    <th colspan="2">Tốc độ tối đa (km/h)</th>
                                </tr>
                                <tr>
                                    <td>Đường đôi; đường một chiều có từ hai làn xe cơ giới trở lên</td>
                                    <td>Đường hai chiều; đường một chiều có một làn xe cơ giới</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Xe ô tô con, xe ô tô chở người đến 30 chỗ (trừ xe buýt); ô tô tải có trọng tải
                                        nhỏ hơn hoặc bằng 3,5 tấn.</td>
                                    <td>90</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>Xe ô tô chở người trên 30 chỗ (trừ xe buýt); ô tô tải có trọng tải trên 3,5 tấn
                                        (trừ ô tô xi téc).</td>
                                    <td>80</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>Ô tô buýt; ô tô đầu kéo kéo sơ mi rơ moóc; ô tô chuyên dùng (trừ ô tô trộn vữa,
                                        ô tô trộn bê tông).</td>
                                    <td>70</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>Ô tô kéo rơ moóc; ô tô kéo xe khác; ô tô trộn vữa, ô tô trộn bê tông, ô tô xi
                                        téc.</td>
                                    <td>60</td>
                                    <td>50</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>- Tốc độ tối đa của xe ô tô <b>trên đường cao tốc </b>không vượt quá 120km/h.</p>
                    </li>
            </div>
            <div>
                <h3>Quy định về đèn tín hiệu giao thông</h3>
                <p>Người tham gia giao thông phải tuân thủ các tín hiệu đèn giao thông như sau:</p>
                <table border="1"
                    style="border-collapse : collapse; width: 100%; text-align: center;  background-color: rgb(228, 225, 225); margin: 10px;">
                    <thead>
                        <th>Màu đèn </th>
                        <th>Ý nghĩa </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="color: red;">Đỏ </td>
                            <td>Tất cả các phương tiện phải dừng lại trước vạch dừng</td>
                        </tr>
                        <tr>
                            <td style="color: yellow;">Vàng </td>
                            <td>Các phương tiện phải dừng lại trước vạch dừng, trừ khi không thể dừng lại an toàn</td>
                        </tr>
                        <tr>
                            <td style="color: green;">Xanh </td>
                            <td>Các phương tiện được phép di chuyển, nhưng phải chú ý quan sát và nhường đường cho các
                                phương tiện khác</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <image
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQc1--Yv1j4k4V0LCGc2twWM1BpmHWkmz5DgUNHiVbtzLvNdUvAvVce6i4agyvi1EOKTJY&usqp=CAU.jpg"
                style="margin: 10px 70px 0px 70px; width: 600px; height: 400px;"></image>
            <p style="font-size: 18px; text-align: center;"><i>Đèn giao thông có quy chuẩn mới từ năm 2025.</i></p>
            <div>
                <h3>Quy định về biển báo giao thông</h3>
                <p>Biển báo hiệu đường bộ gồm 6 nhóm chính sau: </p>
                <ul>
                    <li><b>Biển báo cấm:</b> Cấm đi vào, cấm dừng đỗ.</li>
                    <li><b>Biển báo chỉ dẫn:</b> Chỉ dẫn đường đi, hướng đi.</li>
                    <li><b>Biển báo nguy hiểm:</b> Cảnh báo nguy hiểm trên đường.</li>
                    <li><b>Biển hiệu lệnh:</b> Biểu thị các hiệu lệnh phải chấp hành.</li>
                    <li><b>Biển báo phụ:</b> Bổ sung ý nghĩa của biển chính.</li>
                    <li><b>Biển Vạch kẻ đường: </b>Giúp hướng dẫn, điều khiển. </li>
                </ul>
            </div>
            <div
                style="background-color: rgb(235, 235, 193); border-left: 5px solid rgb(182, 44, 44); margin: 10px; padding: 1px 10px;">
                <p><b>Lưu ý quan trọng: </b>Người tham gia giao thông phải tuân thủ các biển báo giao thông. Trong
                    trường hợp, khi có người điều khiển giao thông thì người tham gia giao thông phải chấp hành hiệu
                    lệnh của người điều khiển giao thông, ngay cả khi hiệu lệnh đó trái với tín hiệu của đèn hoặc biển
                    báo hiệu đường bộ.</p>
            </div>
        </div>
        <footer class="footer">
            <p>Hệ thống Học Lý thuyết Giao thông Đường bộ © 2025</p>
            <p>Phát triển với mục đích nâng cao kiến thức về luật giao thông đường bộ</p>
        </footer>
    </form>
</body>

</html>