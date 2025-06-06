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
            <h2 style="color:#df6915;">Thông tin về phần kiểm tra </h2>
            <hr>
            <h3>Cấu trúc bộ đề thi 200 câu hỏi lý thuyết lái xe A1</h3>
            <p>Bắt đầu từ tháng 8/2020 bộ Giao thông vận tải đã thay đổi bộ đề thi lý thuyết A1 từ 150 câu lên bộ đề mới
                200 câu hỏi. Trong 200 câu hỏi này sẽ được lựa chọn 20 câu là những câu hỏi điểm liệt khi xuất hiện
                trong bài thi yêu cầu học viên phải làm đúng.</p>
            <strong>📌Cấu trúc bộ đề thi 200 câu lý thuyết A1 như sau:</strong>
            <ul>
                <li><b>Phần 1: </b>Gồm 100 câu hỏi về các quy tắc giao thông đường bộ và văn hóa giao thông.</li>
                <li><b>Phần 2: </b>Gồm 65 câu hỏi nói về hệ thống biển báo giao thông đường bộ</li>
                <li><b>Phần cuối: </b>Gồm 35 câu hỏi về sa hình lái xe và kỹ năng xử lý tình huống giao thông</li>
            </ul>
            <h3>📌Cấu trúc bài thi sát hạch lý thuyết lái xe A1:</h3>
            <p>Bộ đề thi lý thuyết bằng lái xe A1 mới sẽ có thay đổi hơn so với cũ khi không còn đánh đố học viên, mỗi
                câu hỏi sẽ chỉ chọn 1 đáp án đúng so với trước đây là chọn 2 – 3 đáp án đúng.</p>
            <p style="color: red; font-weight: bold;">⚠️ Bộ đề thi mới lại yêu cầu học viên phải làm chính xác câu điểm
                liệt, nếu sai câu điểm liệt sẽ đánh rớt ngay lập tức.</p>
            <h4>Thông tin về bài thi sát hạch lý thuyết A1 như sau:</h4>
            <ul>
                <li>Số câu hỏi mỗi đề thi: 25 câu</li>
                <li>Số đáp án đúng yêu cầu: 21/25</li>
                <li>Thời gian làm bài: 19 phút</li>
                <li>Yêu cầu bắt buộc: <i style="color:red;">Không sai câu điểm liệt</i></li>
            </ul>
            <strong>Lưu ý: </strong>Trong bài thi sát hạch lý thuyết lái xe A1 sẽ được bố trí từ 2- 4 câu điểm liệt
            (thông thường chỉ 2 câu). Yêu cầu học viên phải làm đúng những câu này không được sai.

            <h3>📌Hướng dẫn bài thi thực hành: </h3>
            <image src="https://lapphuongthanh.vn/pic/FileLibrary/images/hinh%20sat%20hach%20A1(2).png"
                style="margin: 10px 70px 0px 70px; width: 600px; height: 400px;">
                <p style="text-align: center; font-size: 14;"><i>Sơ đồ thi thực hành lái xe mô tô A1</i> </p>
            </image>
            <h5 style="color:red;">Công tác chuẩn bị:</h5>
            <ul>
                <li>Ngồi chờ tại vị trí chờ thi, khi loa thông báo đến tên thì tiến ra khu vực nhận xe.</li>
                <li>Đội mũ bảo hiểm và cài quai đúng cách – (Bỏ khẩu trang để máy ảnh trên xe thiết bị quét và chụp ảnh)
                </li>
                <li>Nghe hiệu lệnh của giám khảo để biết mình lên xe số mấy. (ví dụ : giám khảo thông báo anh : Nguyễn
                    Văn An chuẩn bị thi và lên xe số 01 – thì anh An phải tìm xe số 01)</li>
                <li>Đỗ thẳng xe trước vạch chờ XUẤT PHÁT để nghe hiệu lệnh và xe đã nổ máy.</li>
            </ul>
            <p style="color: red; font: 16;">💡Chuẩn bị tâm lý thật tốt để thi.</p>
            <h5>Các bước thực hiện : (Tổng điểm là 100 điểm – bạn sẽ bị trừ dần điểm nếu mắc lỗi)</h5>
            <table border="1">
                <thead>
                    <th>Tên bài thực hành </th>
                    <th>Hình vẽ mô phỏng </th>
                    <th>Các lỗi trừ điểm </th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>Bài số 1: Đi qua hình số 8 <br>Hướng dẫn cách thi: </b>
                            <ul>
                                <li>Bạn phải nghe hiệu lệnh từ giám khảm phát trên Loa. Khi có lệnh xuất phát mới được
                                    cho xe chạy.</li>
                                <li>Khi có hiệu lệnh xuất phát, điều khiển xe tiến đến cửa vào hình số 8, rẽ phải đi một
                                    vòng hình số 8 (vạch đứt xanh đậm).</li>
                                <li>Sau đó đi hình số 3 ngược (hình nét đứt xanh nhạt)</li>
                            </ul>
                        </td>
                        <td>
                            <image
                                src="https://lapphuongthanh.vn/pic/FileLibrary/images/%E1%BA%A2nh%20ch%E1%BB%A5p%20M%C3%A0n%20h%C3%ACnh%202023-08-14%20l%C3%BAc%2011_35_15.png">
                            </image>
                        </td>
                        <td>
                            <ul>
                                <li>Chạm vạch một lần trừ 05 điểm</li>
                                <li>Chống chân 01 lần trừ 05 điểm</li>
                                <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                <li>Đi ngược hình trừ 25 điểm trượt luôn</li>
                                <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <b>Bài thi số 2 : Đi qua vạch đường thẳng <br>
                                Hướng dẫn cách thi:
                            </b>
                            <ul>
                                <li>Phải cho bánh đè qua vạch vàng</li>
                                <li>Đi thẳng theo hình mũi tên</li>
                                <li>Giữ đều ga và thẳng lái (tốc độ < 20 km/h) </li>
                                <li>Tiến vào bài thi tiếp theo</li>
                            </ul>
                        </td>
                        <td><img src="https://lapphuongthanh.vn/pic/FileLibrary/images/%E1%BA%A2nh%20ch%E1%BB%A5p%20M%C3%A0n%20h%C3%ACnh%202023-08-14%20l%C3%BAc%2011_35_21.png"
                                alt="" style=""></td>
                        <td>
                            <ul>
                                <li>Chạm vạch một lần trừ 05 điểm</li>
                                <li>chống chân 01 lần trừ 05 điểm</li>
                                <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Bài thi số 3 : Đi qua đường có vạch cản <br>Hướng dẫn cách thi:</b>
                            <ul>
                                <li>Phải cho bánh đè qua vạch vàng</li>
                                <li>Đi theo hình mũi tên</li>
                                <li>Tránh các vạch cản trắng (tốc độ < 20 km/h) </li>
                                <li>Tiến vào bài thi tiếp theo</li>
                            </ul>
                        </td>
                        <td>
                            <img src="https://lapphuongthanh.vn/pic/FileLibrary/images/%E1%BA%A2nh%20ch%E1%BB%A5p%20M%C3%A0n%20h%C3%ACnh%202023-08-14%20l%C3%BAc%2011_35_26.png"
                                alt="">
                        </td>
                        <td>
                            <ul>
                                <li>Chạm vạch một lần trừ 05 điểm</li>
                                <li>chống chân 01 lần trừ 05 điểm</li>
                                <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Bài thi số 4 : Đi qua đường gồ ghề và kết thúc <br>Hướng dẫn cách thi:</b>
                            <ul>
                                <li>Phải cho bánh đè qua vạch vàng</li>
                                <li>Giữ đều ga, thẳng lái theo hình mũi tên</li>
                                <li>Tiến xe qua vạch kết thúc</li>
                                <li><i>Lưu ý :</i> đi theo đường gồ ghề nên cần giữ tay lái chắc 1 chút , nếu thấy xe
                                    yếu cần thêm chút ga để cho xe vượt qua các vạch cản. Khi đi qua vạch kết thúc nếu
                                    Trên Loa thông báo :” XE SỐ X THI ĐẠT” thì xin chúc mừng bạn đã qua phần thi thực
                                    hành lái xe mô tô A1</li>
                            </ul>
                        </td>
                        <td>
                            <img src="https://lapphuongthanh.vn/pic/FileLibrary/images/%E1%BA%A2nh%20ch%E1%BB%A5p%20M%C3%A0n%20h%C3%ACnh%202023-08-14%20l%C3%BAc%2011_35_30.png"
                                alt="">
                        </td>
                        <td>
                            <ul>
                                <li>Chạm vạch một lần trừ 05 điểm</li>
                                <li>chống chân 01 lần trừ 05 điểm</li>
                                <li>Xe chết máy mỗi lần trừ 05 điểm</li>
                                <li>Hai bánh ra khỏi hình thi trừ 25 điểm trượt luôn</li>
                                <li>Không hoàn thành bài thi trừ 25 điểm trượt luôn</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p style="font: 18;">✅ĐẠT ⮕ Nếu kết quả của 4 bài thi đạt từ 80 điểm trở lên. </p>
            <p style="font: 18;">❌KHÔNG ĐẠT ⮕ Nếu kết quả của 4 bài thi dưới 80 điểm.</p>
        </div>
        <footer class="footer">
            <p>Hệ thống Học Lý thuyết Giao thông Đường bộ © 2025</p>
            <p>Phát triển với mục đích nâng cao kiến thức về luật giao thông đường bộ</p>
        </footer>
    </form>
</body>

</html>