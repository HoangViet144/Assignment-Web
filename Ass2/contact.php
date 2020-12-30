<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script src="contact.js"></script>
    <!-- FONT-FOOTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Nunito:ital,wght@0,200;1,600&family=Thasadith&display=swap" rel="stylesheet" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- FONT ICON -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="whole-page">
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
                        <div class="col-sm-12">
                            <a href="./pricing.php">Bảng giá</a>
                        </div>
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
                        <li class="nav-item">
                            <a class="nav-link" href="./pricing.php">Bảng giá</a>
                        </li>
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
        <!-- The end of the Header Part-->
        <!-- Starting Intro Part -->
        <div class="container-fluid" style="padding-top: 8em">
            <?php
            if (isset($_COOKIE['editmode']) && $_COOKIE['editmode']) {
                echo '<button class="X_btn" id="editmode">Tắt chỉnh sửa</button>';
            }
            ?>
            <div class="row">
                <div class="col-sm">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">CONTACT</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" colspan="2" style="font-size: 30px" id="article"></th>
                            </tr>
                            <tr>
                                <td id='content'></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p id='companyname'></p>
                                    <p id='taxnumber'></p>

                                    <ul id='content_list'>
                                        <li>
                                            <p id='companyaddr'>

                                            </p>
                                        </li>
                                        <li class="phone" id='phone'>

                                        </li>
                                        <li class="email" id='mail'>

                                        </li>
                                        <li class="website" id='web'>

                                        </li>
                                    </ul>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <img src="img/contact.jfif" id="my-contact-photo" class="img-fluid" alt="Ảnh nhân viên hỗ trợ" />
                </div>
                <div class="col-sm-12" id="part2" style="text-align: center; padding-top: 4em">
                    <h1 style="font-size: 1.5em">Tham gia cùng với đội ngũ phát triển của chúng tôi</h1>
                    <div id="my-pagrap">Bạn sẽ luôn tìm được những nhưng đội ngũ đầy nhiệt huyết, đáng tin cậy và cố gắng để chúng ta có được cơ sở kinh doanh tốt nhất</div>
                </div>
            </div>
        </div>
        <!-- Ending Intro Part -->
        <div id="forum">
            <div id="title">Diễn đàn</div>
            <div id="forum-content">

            </div>
        </div>

        <!-- FOOTER PART -->
        <div id="footer">
            <div class="container-fluid my-footer" style="background-color: #002e25; margin-top: -30px">
                <div id="my-footer-top" style="border-bottom: 1px solid rgba(210, 213, 217, 0.1)">
                    <nav class="navbar navbar-expand-lg" id="my-footer-top-desk">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.php">Thông tin</a>
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
                        <div class="row" style="padding-top: 3em; padding-bottom: 3em">
                            <div class="col-12 col-md-4">
                                <a href="./index.php">Trang chủ</a><br />
                                <a href="./contact.php">Thông tin</a> <br />
                                <a href="./pricing.php">Giá</a> <br />
                                <a href="./contact.php">Liên hệ</a> <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px">
                    <div class="col-4 col-md-4">
                        <a href="./contact.php" class="my-title-col">HỖ TRỢ </a><br />
                        <a href="#">24/7</a><br />
                        <a href="#">Diễn đàn</a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="./index.php" class="my-title-col">SHOPIFY</a><br />
                        <a href="./contact.php">Liên hệ </a><br />
                        <a href="./about.php">Thông tin </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="./Sell.php" class="my-title-col">KINH DOANH ONLINE </a><br />
                        <a href="./Sell.php">Bán hàng Online </a><br />
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
    <!-- END FOOTER PART -->
    <script>
        var x = document.getElementById("my-table-basic");
        var y = document.getElementById("my-table-shopify");
        var z = document.getElementById("my-table-advance");

        function myFunction1() {
            x.style.display = "block";
            y.style.display = "none";
            z.style.display = "none";
        }

        function myFunction2() {
            y.style.display = "block";
            x.style.display = "none";
            z.style.display = "none";
        }

        function myFunction3() {
            z.style.display = "block";
            y.style.display = "none";
            x.style.display = "none";
        }
    </script>
</body>

</html>