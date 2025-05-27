<?php
session_start();
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');

// Check session timeout (30 minutes)
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 1800)) {
    session_unset();
    session_destroy();
    $_SESSION['message'] = 'Phiên đăng nhập đã hết hạn!';
    header('Location: index.php');
    exit;
}
$_SESSION['last_activity'] = time();

// Generate CSRF token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$message = isset($_SESSION['message']) ? htmlspecialchars($_SESSION['message']) : '';
unset($_SESSION['message']);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <title>TrafficEdu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">TrafficEdu</div>
            <ul class="nav-links">
                <li><a href="#" class="active">Trang chủ</a></li>
                <li><a href="./pages/home.php">Lý thuyết</a></li>
                <li><a href="./pages/test.php">Ôn tập</a></li>
                <li><a href="./pages/thi-bang-lai-xe-a1-online.php">Thi thử</a></li>
                <li>
                    <?php if (isset($_SESSION['user']['name'])): ?>
                    <span class="user-account data-logged-in">
                        <i class="fas fa-user"></i> <?php echo htmlspecialchars($_SESSION['user']['name']); ?>
                    </span>
                    <?php else: ?>
                    <a href="#" class="auth-link"><i class="fas fa-user"></i> Tài khoản</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>TrafficEdu – Học Lái Xe</h1>
            <p>Học lý thuyết, ôn tập và thi thử để chuẩn bị cho kỳ thi bằng lái xe.</p>
            <p>🚗 Chuẩn bị thi bằng lái với lý thuyết, ôn tập, thi thử. </p>
            <p>📚 Học quy định giao thông, luật lái xe. </p>
            <p>📝 Luyện tập câu hỏi thực tế, kiểm tra kiến thức.</p>
            <p>🚦 Truy cập ngay để bắt đầu hành trình lái xe của bạn!</p>
            <p>🚀 <strong>TrafficEdu</strong> - Nơi bạn bắt đầu hành trình lái xe an toàn!</p>
            <a href="#features" class="explore-btn">Khám phá</a>
        </div>
    </section>

    <section class="features" id="features">
        <h2 class="section-title">Tính Năng</h2>
        <div class="card-container">
            <a href="./pages/home.php" class="card card-link">
                <i class="fas fa-book" style="color: #10b981;"></i>
                <h3>Lý thuyết</h3>
                <p>Học quy định giao thông.</p>
            </a>
            <a href="./pages/test.php" class="card card-link">
                <i class="fas fa-clipboard" style="color: #e11d48;"></i>
                <h3>Ôn tập</h3>
                <p>Luyện câu hỏi thực tế.</p>
            </a>
            <a href="./pages/thi-bang-lai-xe-a1-online.php" class="card card-link">
                <i class="fas fa-pen" style="color: #3b82f6;"></i>
                <h3>Thi thử</h3>
                <p>Kiểm tra kiến thức.</p>
            </a>
        </div>
    </section>

    <div class="auth-sidebar" id="authSidebar">
        <span class="close-sidebar"><i class="fas fa-times"></i></span>
        <h2 class="sidebar-title">Tài khoản</h2>
        <?php if ($message): ?>
        <div class="auth-message"><?php echo $message; ?></div>
        <?php endif; ?>
        <div class="auth-tabs">
            <button class="tab-button active" onclick="switchTab('loginForm')">Đăng nhập</button>
            <button class="tab-button" onclick="switchTab('registerForm')">Đăng ký</button>
        </div>
        <form id="loginForm" class="auth-form active" onsubmit="handleLogin(event)">
            <input type="hidden" name="action" value="login">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <div class="input-group">
                <label for="loginUsername">Tên đăng nhập</label>
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" id="loginUsername" name="username" placeholder="Tên đăng nhập" required>
                </div>
            </div>
            <div class="input-group">
                <label for="loginPassword">Mật khẩu</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="loginPassword" name="password" placeholder="Mật khẩu" required>
                </div>
            </div>
            <button type="submit" class="submit-btn">Đăng nhập</button>
        </form>
        <form id="registerForm" class="auth-form" onsubmit="handleRegister(event)">
            <input type="hidden" name="action" value="register">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <div class="input-group">
                <label for="registerName">Họ và tên</label>
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" id="registerName" name="name" placeholder="Họ và tên" required>
                </div>
            </div>
            <div class="input-group">
                <label for="registerUsername">Tên đăng nhập</label>
                <div class="input-wrapper">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" id="registerUsername" name="username" placeholder="Tên đăng nhập" required>
                </div>
            </div>
            <div class="input-group">
                <label for="registerEmail">Email</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" id="registerEmail" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="input-group">
                <label for="registerPassword">Mật khẩu</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="registerPassword" name="password" placeholder="Mật khẩu" required>
                </div>
            </div>
            <div class="input-group">
                <label for="confirmPassword">Nhập lại mật khẩu</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Nhập lại mật khẩu"
                        required>
                </div>
            </div>
            <button type="submit" class="submit-btn">Đăng ký</button>
        </form>
    </div>

    <div class="logout-sidebar" id="logoutSidebar">
        <span class="close-sidebar"><i class="fas fa-times"></i></span>
        <h2 class="sidebar-title">Tài khoản</h2>
        <div class="sidebar-buttons">
            <button class="info-btn" onclick="toggleUserInfo()">Xem thông tin</button>
            <button class="change-password-btn" onclick="toggleChangePassword()">Đổi mật khẩu</button>
        </div>
        <div class="user-info" id="userInfo"></div>
        <div class="change-password-section hidden" id="changePasswordSection">
            <h3 class="sidebar-subtitle">Đổi mật khẩu</h3>
            <form id="changePasswordForm" onsubmit="handleChangePassword(event)">
                <input type="hidden" name="action" value="change_password">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="input-group">
                    <label for="currentPassword">Mật khẩu hiện tại</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="currentPassword" name="currentPassword"
                            placeholder="Mật khẩu hiện tại" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="newPassword">Mật khẩu mới</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="newPassword" name="newPassword" placeholder="Mật khẩu mới" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="confirmNewPassword">Nhập lại mật khẩu mới</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" id="confirmNewPassword" name="confirmNewPassword"
                            placeholder="Nhập lại mật khẩu mới" required>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Đổi mật khẩu</button>
            </form>
        </div>
        <form id="logoutForm" method="POST" action="logout.php">
            <input type="hidden" name="action" value="logout">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <button type="submit" class="logout-btn">Đăng xuất</button>
        </form>
    </div>

    <div class="overlay" id="overlay"></div>
    <div id="toastContainer" class="toast-container"></div>

    <footer>
        <div class="footer-content">
            <p><strong>TrafficEdu</strong> - Học thi lái xe.</p>
            <p>© 2025 TrafficEdu.</p>
        </div>
    </footer>

    <script src="./assets/js/main.js"></script>
</body>

</html>