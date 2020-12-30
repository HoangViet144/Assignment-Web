<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
include "config.php";
$resultiter = mysqli_query($con, "SELECT * FROM examples");
$img = array();
while ($row = mysqli_fetch_assoc($resultiter)) {
    array_push($img, $row);
}
mysqli_close($con);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Shopify</title>
    <link rel="stylesheet" href="css/example.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
</head>

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
                    <a class="company-name nav-link" href="./index.php">shopify</a>
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
        <div id="section1">
            <div class="row">
                <div class="col-sm">
                    <div class="row header">Tìm hướng đi tốt nhất <br />cho việc kinh doanh của bạn</div>
                    <div class="row content">Từ cửa hàng giày tới cửa hàng thức ăn, hãy cùng xem qua các sản phẩm chúng tôi đã thiết kế và chọn ý tưởng cho cửa hàng của bạn</div>
                </div>
                <div class="col-sm">
                    <img src="img/example_pic1.webp" onload="this.height/=2;" alt="pic1" />
                </div>
            </div>
        </div>
        <div id="section2">
            <div class="row menu">
                <div class="col-sm">
                    <a class="item active" id="home-furniture">Nhà cửa và nội thất</a>
                </div>
                <div class="col-sm">
                    <a class="item" id="book">Sách</a>
                </div>
                <div class="col-sm">
                    <a class="item" id="clothing">Quần áo và thời trang </a>
                </div>
                <div class="col-sm">
                    <a class="item" id="jewelry">Trang sức và phụ kiện</a>
                </div>
            </div>
            <div class="examples home-furniture">
                <?php
                for ($i = 0; $i < count($img); $i++) {
                    $img_name = $img[$i]['img_name'];
                    $img_href = $img[$i]['href'];
                    $image = base64_encode($img[$i]['img']);
                    $title = $img[$i]['title'];
                    if ($title == 'home-furniture') {
                        echo "<div class='row'>
                            <div class='row first-item'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                        break;
                    }
                }
                ?>

                <div class="row">
                    <?php
                    for ($i = 1; $i < count($img); $i++) {
                        $img_name = $img[$i]['img_name'];
                        $img_href = $img[$i]['href'];
                        $image = base64_encode($img[$i]['img']);
                        $title = $img[$i]['title'];
                        if ($title != 'home-furniture') continue;
                        echo
                            "<div class='col-sm'>
                            <div class='row item-img'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <div class="examples hide book">
                <?php
                for ($i = 0; $i < count($img); $i++) {
                    $img_name = $img[$i]['img_name'];
                    $img_href = $img[$i]['href'];
                    $image = base64_encode($img[$i]['img']);
                    $title = $img[$i]['title'];
                    if ($title == 'book') {
                        echo "<div class='row'>
                            <div class='row first-item'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                        break;
                    }
                }
                ?>
                <div class="row">
                    <?php
                    for ($i = 1; $i < count($img); $i++) {
                        $img_name = $img[$i]['img_name'];
                        $img_href = $img[$i]['href'];
                        $image = base64_encode($img[$i]['img']);
                        $title = $img[$i]['title'];
                        if ($title != 'book') continue;
                        echo
                            "<div class='col-sm'>
                            <div class='row item-img'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="examples hide clothing">
                <?php
                for ($i = 0; $i < count($img); $i++) {
                    $img_name = $img[$i]['img_name'];
                    $img_href = $img[$i]['href'];
                    $image = base64_encode($img[$i]['img']);
                    $title = $img[$i]['title'];
                    if ($title == 'clothing') {
                        echo "<div class='row'>
                            <div class='row first-item'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                        break;
                    }
                }
                ?>
                <div class="row">
                    <?php
                    for ($i = 1; $i < count($img); $i++) {
                        $img_name = $img[$i]['img_name'];
                        $img_href = $img[$i]['href'];
                        $image = base64_encode($img[$i]['img']);
                        $title = $img[$i]['title'];
                        if ($title != 'clothing') continue;
                        echo
                            "<div class='col-sm'>
                            <div class='row item-img'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
            <div class="examples hide jewelry">
                <?php
                for ($i = 0; $i < count($img); $i++) {
                    $img_name = $img[$i]['img_name'];
                    $img_href = $img[$i]['href'];
                    $image = base64_encode($img[$i]['img']);
                    $title = $img[$i]['title'];
                    if ($title == 'jewelry') {
                        echo "<div class='row'>
                            <div class='row first-item'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                        break;
                    }
                }
                ?>
                <div class="row">
                    <?php
                    for ($i = 1; $i < count($img); $i++) {
                        $img_name = $img[$i]['img_name'];
                        $img_href = $img[$i]['href'];
                        $image = base64_encode($img[$i]['img']);
                        $title = $img[$i]['title'];
                        if ($title != 'jewelry') continue;
                        echo
                            "<div class='col-sm'>
                            <div class='row item-img'>
                                <img src='data:image/jpg;charset=utf8;base64,$image' /> 
                            </div>
                            <div class='row item-name'>
                                <a href='$img_href'>$img_name</a>
                            </div>
                        </div>";
                    }
                    ?>
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
                <button onclick="window.location.href='./login.php'">Bắt đầu ngay</button>
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