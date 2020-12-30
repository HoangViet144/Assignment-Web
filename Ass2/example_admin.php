<!DOCTYPE html>
<html lang="vi">
<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
if ($_SESSION['role'] == 1) {
    header('Location: ./login.php');
}
if ($_SESSION['role'] == 2) {
    header('Location: ./index.php');
}
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
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="css/example_admin.css" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script src="example_admin.js"></script>
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
            <h3>Thêm các tư liệu sản phẩm:</h3>
            <div id="insert-form">
                <form action="./service/example.php" method="POST" enctype="multipart/form-data">
                    <div class='row'>
                        <label class='col-sm-4'>Hình ảnh: </label><input class='col-sm-8' type="file" name="image" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Tên: </label><input class='col-sm-8' type="text" name="image_name" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Link: </label><input class='col-sm-8' type="text" name="image_link" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Chủ đề: </label><input class='col-sm-8' type="text" name="title" />
                    </div>
                    <div class='row'>
                        <input class='col-sm' type="submit" />
                    </div>
                </form>
            </div>
        </div>
        <div id="section2">
            <h3>Chỉnh sửa sản phẩm</h3>
            <div id='edit_product'>
                <form action="./service/example.php" method="POST" enctype="multipart/form-data">
                    <div class='row'>
                        <label class='col-sm-4' id='edit_id_label'>Id: </label><input class='col-sm-8' type="text" name="img_id" id="edit_id" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Hình ảnh: </label><input class='col-sm-8' type="file" name="image" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Tên: </label><input class='col-sm-8' type="text" name="image_name" id="edit_name" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Link: </label><input class='col-sm-8' type="text" name="image_link" id="edit_href" />
                    </div>
                    <div class='row'>
                        <label class='col-sm-4'>Chủ đề: </label><input class='col-sm-8' type="text" name="title" id="edit_title" />
                    </div>
                    <div class='row'>
                        <input class='col-sm' type="submit" />
                    </div>
                </form>
            </div>
        </div>

        <div id="section3">
            <h3>Danh sách các hình ảnh sản phẩm</h3>
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" id='searchall' type="text" placeholder="Tìm kiếm" aria-label="Search">
                </form>
            </nav>

            <div class='row title_list'>
                <div class='col-sm'>
                    <h4>Tên cửa hàng</h4>
                </div>
                <div class='col-sm'>
                    <h4>Website</h4>
                </div>
                <div class='col-sm'>
                    <h4>Chủ đề</h4>
                </div>
                <div class='col-sm'>
                </div>
            </div>
            <div id="product-list">
                <?php
                foreach ($img as $ele) {
                    $img_id = $ele['id'];
                    $img_name = $ele['img_name'];
                    $img_href = $ele['href'];
                    $image = base64_encode($ele['img']);
                    $title = $ele['title'];
                    echo
                        "<div class='product' id='$img_id'><hr>
                            <div class='row'>
                                <div class='col-sm' id='name_$img_id'>$img_name</div>
                                <div class='col-sm' id='href_$img_id'>$img_href</div>
                                <div class='col-sm' id='title_$img_id'>$title</div>
                                <div class='col-sm'>
                                    <button id='$image' class='product_img btn'>Xem hình ảnh</button>
                                    <button id='edit_$img_id' class='btn edit'>Chỉnh sửa</button>
                                    <button id='del_$img_id' class='btn del'>xóa</button>
                                </div>
                            </div>
                        </div>";
                }
                ?>
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