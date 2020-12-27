<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Shopify - Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="login.js"></script>
</head>
<?php
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
if ($_SESSION['role'] > 1) {
    header("location:index.php");
}
?>

<body>
    <div id="container">
        <div id="login-form">
            <form id="loginform" method="POST">
                <div class="row">
                    <img src="img/shopify-seeklogo.com.svg" id="logo" alt="Logo" />
                    <a id="company-name" href="./index.php">shopify</a>
                </div>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" />
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu" />
                </div>
                <div class="form-group">
                    <button type="submit">Đăng nhập</button>
                </div>
                <div class="form-group">
                    <a href="./register.php">Đăng ký mới </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>