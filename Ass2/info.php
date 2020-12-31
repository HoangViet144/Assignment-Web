<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
if ($_SESSION['role'] == 1) {
    header('Location: ./login.php');
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Shopify</title>
    <link rel="stylesheet" href="css/info.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script src="info.js"></script>
</head>
<?php
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
?>

<body>
    <div id="container">
        <div id="background" onclick="closeNav()"></div>
        <div id="header">
            <div id="mySidebar" class="sidebar">
                <div id="sidebarContent">
                    <div class="row">
                        <div class="col-sm-10">
                            <img src="img/shopify-seeklogo.com.svg" class="logo" alt="Logo" />
                            <a class="company-name" href="./index.php">shopify</a>
                        </div>
                    </div>
                    <div class="row">
                        <?php

                        if ($_SESSION['role'] > 1) {
                            $username = $_SESSION['username'];
                            echo "<div class='col-sm-12'>
                            <a>Xin chào, $username</a>
                        </div>";
                            echo '<div class="col-sm-12">
                            <a href="./pricing.php">Thông tin cá nhân</a>
                        </div>';
                        }
                        ?>
                        <?php
                        if ($_SESSION['role'] == 3) {

                            echo "<div class='col-sm-12'>
                                    <a href='./pricing_admin.php'>Bảng giá</a>
                                </div>";
                        } else {
                            echo "<div class='col-sm-12'>
                                    <a href='./pricing_admin.php'>Bảng giá</a>
                                </div>";
                            echo "<div class='col-sm-12'>
                            <a href='./pricing.php'>Bảng giá</a>
                        </div>";
                        }

                        ?>
                        <div class="col-sm-12">
                            <a href="./examples.php">Sản phẩm mẫu</a>
                        </div>
                        <?php
                        if ($_SESSION['role'] == 1) {
                            echo '<div class="col-sm-12">
                            <a href="./login.php">Đăng nhập</a>
                        </div>';
                            echo '<div class="col-sm-12">
                            <a href="./register.php">Đăng ký</a>;
                        </div>';
                            echo "<div class='col-sm-12'>
                            <button onclick='window.location.href=`login.php`'>Bắt đầu ngay</button>
                        </div>";
                        } else {
                            echo '<div class="col-sm-12">
                            <a href="./service/auth.php?logout=true">Đăng xuất</a>
                        </div>';
                        }

                        ?>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="./about.php">Về chúng tôi</a>
                        </div>
                        <div class="col-sm-12">
                            <a href="./contact.php">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="header-navbar navbar navbar-expand-md navbar-light">
                <div class="navbar-brand">
                    <img src="img/shopify-seeklogo.com.svg" class="logo" alt="Logo" />
                    <a class="nav-link company-name" href="./index.php">shopify</a>
                </div>

                <button class="navbar-toggler" type="button" onclick="openNav()">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="header-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">Về chúng tôi</a>
                        </li>
                        <!-- HANDLE PRICIE -->
                        <li class="nav-item">
                            <?php
                            if ($_SESSION['role'] == 3) {

                                echo "<a class='nav-link' href='./pricing_admin.php'>Bảng giá</a>
                            ";
                            } else {
                                echo "<a class='nav-link' href='./pricing.php'>Bảng giá</a>
                            ";
                            }

                            ?>
                        </li>
                        <!-- END HANDLE PRICE -->
                        <!-- <li class="nav-item">

                            <a class="nav-link" href="./pricing.php">Bảng giá</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./examples.php">Sản phẩm</a>
                        </li>
                        <?php
                        if ($_SESSION['role'] == 1) {
                            echo '<li class="nav-item">
                            <a class="nav-link" href="./login.php">Đăng nhập</a>
                        </li>';
                            echo '<li class="nav-item">
                            <a class="nav-link last-item" href="./login.php">Bắt đầu ngay</a>
                        </li>';
                        } else {
                            $username = $_SESSION['username'];
                            echo '<li class="nav-item">
                            <a class="nav-link" href="./service/auth.php?logout=true">Đăng xuất</a>
                        </li>';
                            echo "<li class='nav-item'>
                            <a class='nav-link last-item' href='./info.php' >Xin chào, $username</a>
                        </li>";
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div id="section1">
            <?php
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $email = $_SESSION['email'];
            $fullname = $_SESSION['fullname'];
            $dob = $_SESSION['DOB'];
            $sex = $_SESSION['sex'];

            echo '<form id="adjustform" method="POST">';
            echo "<label for='username'>Username :</label> <input type='text' id='display_name' value='";
            echo "$username' readonly> <br><br>";
            echo "<label for='password'>Mật khẩu :</label> <input type='text' id='display_password' value='";
            echo "$password'> <br><br>";
            echo "<label for='email'>Email :</label> <input type='text' id='display_email' value='";
            echo "$email'> <br><br>";
            echo "<label for='fullname'>Họ và tên :</label> <input type='text' id='display_fullname' value='";
            echo "$fullname'> <br><br>";
            echo "<label for='dob'>Ngày tháng năm sinh :</label> <input type='date' id='display_dob' value='";
            echo "$dob'> <br><br>";
            if ($sex == "male") {
                echo "<label for='sex'>Giới Tính :</label>  <input type='radio' id='male' name='gender' value='male' style='width:5%' checked>Nam  <input type='radio' id='female' name='gender' value='female' style='width:5%'>Nữ <br><br>";
            } else if ($sex == "femal") {
                echo "<label for='sex'>Giới Tính :</label>  <input type='radio' id='male' name='gender' value='male' style='width:5%'>Nam <input type='radio' id='female' name='gender' value='female' style='width:5%' checked>Nữ <br><br>";
            } else {
                echo "<label for='sex'>Giới Tính :</label>  <input type='radio' id='male' name='gender' value='male' style='width:5%'>Nam <input type='radio' id='female' name='gender' value='female' style='width:5%'>Nữ <br><br>";
            }
            echo '<button type="submit">Cập Nhật</button>';
            echo '</form>';
            ?>

        </div>
        <div id="section2">
            <?php
            if ($_SESSION['role'] === 3) {
                echo '
                <h3>Quản lý trang web</h3>
                <div class="row">
                    <div class="col-sm">
                        <button class="edit_product">Quản lý trang Sản phẩm</button>
                    </div>
                    <div class="col-sm">
                        <button class="edit_pricing">Quản lý trang Biểu giá</button>
                    </div>
                    <div class="col-sm">
                        <button class="edit_contact">Quản lý trang Liên hệ</button>
                    </div>
                    <div class="col-sm">
                        <button class="edit_member">Quản lý Thành viên</button>
                    </div>
                </div>
            ';
            }
            ?>
        </div>

        <div id="footer">
            <div class="container-fluid my-footer" style="background-color: #002e25">
                <div id="my-footer-top" style="border-bottom: 1px solid rgba(210, 213, 217, 0.1)">
                    <nav class="navbar navbar-expand-lg" id="my-footer-top-desk">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./examples.php">Sản phẩm mẫu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./pricing.php">Giá</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./contact.php">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="my-footer-top-mobile">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <a href="./index.php">Trang chủ</a><br />
                                <a href="./examples.php">Sản phẩm mẫu</a> <br />
                                <a href="./pricing.php">Giá</a> <br />
                                <a href="./contact.php">Liên hệ</a> <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px">
                    <div class="col-4 col-md-4">
                        <a href="./contact.php" class="my-title-col">HỖ TRỢ </a><br />
                        <a href="#">24/7 </a><br />
                        <a href="#">Diễn đàn </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="./index.php" class="my-title-col">SHOPIFY</a><br />
                        <a href="./contact.php">Liên hệ </a><br />
                        <a href="./examples.php">Sản phẩm mẫu </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#" class="my-title-col">KINH DOANH ONLINE </a><br />
                        <a href="#">Bán hàng Online </a><br />
                        <a href="#">Tên miền </a><br />
                        <a href="#">Giỏ hàng </a>
                    </div>
                </div>
                <div id="my-footer-bottom">
                    <div class="row" style="padding-top: 3em; padding-bottom: 3em">
                        <div class="col-12 col-md-4">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                        </div>
                        <div class="col align-self-end">
                            <div class="row">
                                <div class="col-12 col-md-4"><a href="#"> Chính sách</a></div>
                                <div class="col-12 col-md-4"><a href="#"> Quyền</a></div>
                                <div class="col-12 col-md-4"><a href="#"> Ngôn ngữ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>