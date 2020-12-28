<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Shopify</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
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
                            <button onclick='window.location.href='login.php''>Bắt đầu ngay</button>
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
            <div class="row">
                <div class="col-sm">
                    <div class="row" id="up">
                        <p>Bất kỳ ai, bất cứ đâu</p>
                        <p>đều có thể bắt đầu kinh doanh</p>
                    </div>
                    <div class='row' id='down'>
                        <?php
                        if ($_SESSION['role'] == 1) {
                            echo "<button onclick='window.location.href=`login.php`'>Băt đầu ngay</button>";
                        } else {
                            echo "<button onclick='window.location.href=`pricing.php`'>Băt đầu ngay</button>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="img/index_pic1.PNG" alt="Bat dau cong viec kinh doanh cua ban" />
                </div>
            </div>
        </div>
        <div id="section2">
            <div id="header_section2">
                <h2>Mang công việc kinh doanh của bạn lên thế giới số</h2>
                <p>Tạo một trang web thương mại điện tử sẽ giúp bạn tìm kiếm khách hàng, tăng doanh thu và theo dõi hoạt động kinh doanh của bạn mỗi ngày</p>
                <a href="./examples.php">Xem nhiều ví dụ hơn </a>
                <img src="img/arrowright.png" alt="hi" width="20" />
            </div>
            <div id="items_section2">
                <div class="row">
                    <div class="col-sm" id="food">
                        <img src="img/index_food.jpg" alt="food/" />
                        <p>THỨC ĂN</p>
                    </div>
                    <div class="col-sm" id="#jewelry">
                        <img src="img/index_jewery.jpg" alt="jewelry" />
                        <p>TRANG SỨC</p>
                    </div>
                    <div class="col-sm" id="drink">
                        <img src="img/index_drink.jpg" alt="drink" />
                        <p>GIẢI KHÁT</p>
                    </div>
                    <div class="col-sm" id="cosmetic">
                        <img src="img/index_cosmetics.jpg" alt="cosmetics" />
                        <p>MỸ PHẨM</p>
                    </div>
                    <div class="col-sm" id="garden">
                        <img src="img/index_garden.jpg" alt="garden" />
                        <p>CÂY TRỒNG</p>
                    </div>
                </div>
            </div>
            <div id="header2_section2">Chọn con đường tốt nhất để đi lên</div>
            <div id="items2_section2">
                <div class="row">
                    <div class="col-sm">
                        <img src="img/lamp.png" alt="lamp" />
                        <p class="header-card">Bắt đầu kinh doanh trực tuyến</p>
                        <p>Bắt đầu công việc khi bạn có một ý tưởng tuyệt vời hoặc đang tìm kiếm một cách mới để kiếm tiền</p>
                    </div>
                    <div class="col-sm">
                        <img src="img/file-transfer.png" alt="transfer" />
                        <p class="header-card">Đưa ý tưởng lên thế giới số</p>
                        <p>Chuyển đổi cửa hàng truyền thống thành cửa hàng trực tuyến và tiếp tục phục vụ khách hàng một cách tốt nhất</p>
                    </div>
                    <div class="col-sm">
                        <img src="img/bank-transfer.png" alt="transfer" />
                        <p class="header-card">Chuyển đổi qua Shopify</p>
                        <p>Đưa cửa hàng của bạn cho Shopify, bất kể nền tảng nào bạn đang sử dụng</p>
                    </div>
                    <div class="col-sm">
                        <img src="img/team.png" alt="team" />
                        <p class="header-card">Thuê các chuyên gia của Shopify</p>
                        <p>Nhận được sự hỗ trợ từ đội ngũ Tư vấn bán hàng chuyên nghiệp của Shopify</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="section3">
            <div class="row" id="header-section3">
                <p>Bên cạnh bạn bất kể đâu</p>
            </div>
            <div class="row" id="detail-header-section3">
                <p>Một nền tảng với toàn bộ tính năng hỗ trợ kinh doanh để giúp bạn bắt đầu, điều hành và phát triển công việc của bạn</p>
            </div>
            <div class="row" id="row1">
                <div class="col-sm">
                    <img src="img/index_pic2.PNG" alt="pic2" />
                </div>
                <div class="col-sm">
                    <p class="header">Bán hàng <br />ở mọi nơi</p>
                    <p class="content">Dùng một nền tảng có thể bán sản phẩm ở mọi nơi, cho bất cứ ai thông qua trang web của bạn, mạng xã hội và sàn thương mại điện tử</p>
                    <a id="sell-a" href="./Sell.php">Khám phá cách bán hàng </a>
                </div>
            </div>
            <div class="row" id="row2">
                <div class="col-sm">
                    <p class="header">
                        Tiếp thị <br />
                        doanh nghiệp của bạn
                    </p>
                    <p class="content">Loại bỏ những phỏng đoán với những công cụ giúp bạn tạo, vận hành và thống kê chiến dịch tiếp thị</p>
                </div>
                <div class="col">
                    <img src="img/index_pic3.png" alt="pic3" />
                </div>
            </div>
            <div class="row" id="row3">
                <div class="col-sm">
                    <img src="img/index_pic4.PNG" alt="pic4" id="img4" />
                </div>
                <div class="col-sm">
                    <div class="header">
                        Quản lý <br />
                        mọi thứ
                    </div>
                    <div class="content">Nắm được các thông tin bạn cần để phát triển - sử dụng một trang duy nhất để quản lý đơn hàng, giao nhận và thanh toán ở mọi nơi bạn đến</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="header" id="empower">
                        Tăng cường năng lực kinh doanh <br />
                        của các chủ doanh nghiệp ở mọi nơi
                    </div>
                    <div class="content">
                        Hơn <strong>1,000,000 doang nghiệp</strong> trên <strong>175 quốc gia</strong> khắp thế giới đã tạo ra hơn <strong>$ 200 triệu Dollar</strong> lợi nhuận khi dùng Shopify
                    </div>
                    <div class="link">
                        <a href="./about.php">Tìm hiểu thêm về Shopify</a>
                        <img src="img/right-arrow.png" alt="arrow" width="20" />
                    </div>
                </div>
            </div>
        </div>
        <div id="section4">
            <div class="row">
                <div class="col-sm">
                    <div class="row" id="header-section4">
                        Nhận sự giúp đỡ bạn cần <br />
                        một cách chi tiết nhất
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <p class="header">Hỗ trợ từ Shopify</p>
                            <p class="content">Liên hệ hỗ trợ 24/7 khi bạn gặp phải vấn đề hoặc đang tìm kiếm lời khuyên</p>
                            <div class="link">
                                <a href="./contact.php">Diễn đàn, hỗ trợ</a>
                                <img src="img/right-arrow.png" alt="arrow" width="20" />
                            </div>
                        </div>
                        <div class="col-sm">
                            <p class="header">Các chuyên gia của Shopify</p>
                            <p class="content">Thuê chuyên gia để giúp bạn mọi thứ từ cài đặt cửa hàng tới SEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm" id="pic5">
                    <img src="img/index_pic5.jpg" alt="pic5" />
                </div>
            </div>
        </div>
        <div id="section5">
            <div class="row">
                <p class="header">Bắt đầu hành trình kinh doanh của bạn với Shopify</p>
            </div>
            <div class="row">
                <p class="content">Khám phá và trải nghiệm các dịch vụ của Shopify để giúp bạn xây dựng, vận hành và phát triển công việc của bạn</p>
            </div>
            <div class="row">
                <?php
                if ($_SESSION['role'] == 1) {
                    echo "<button onclick='window.location.href=`login.php`'>Băt đầu ngay</button>";
                } else {
                    echo "<button onclick='window.location.href=`pricing.php`'>Băt đầu ngay</button>";
                }
                ?>
            </div>
            <div class="row" id="backtotop">
                <a onclick="topFunction()">Trở lại đầu trang</a>
            </div>
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