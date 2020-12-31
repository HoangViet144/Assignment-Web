<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="vi">

<?php
session_start();
if (!isset($_SESSION['role'])) $_SESSION['role'] = 1;
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing</title>
    <link rel="stylesheet" href="css/pricing.css" />
    <link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="index.js"></script>
    <script src="pricing.js"></script>
    <!-- FONT-FOOTER -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Nunito:ital,wght@0,200;1,600&family=Thasadith&display=swap" rel="stylesheet" />
    <!-- ICON FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- FONT ICON -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet" />



</head>

<body>
    <!--  Starting Header Part -->
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
                            <a href="./register.php">Đăng ký</a>
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
    <!-- Starting Intro Part -->
    <div id="body-content">
        X
        <div class="jumbotron first-jumbotron" style="padding-top: 5em">
            <h1>Xây dựng cửa hàng trước, xây dựng kế hoạch sau.</h1>
            <p class="display-4">Dùng thử 14 ngày không cần thẻ tín dụng</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="./login.php" role="button">Dùng thử miễn phí</a>
            </p>
        </div>
        <!-- Ending Intro Part -->
        <!-- Starting Table Part -->
        <table class="table" id="my-table-respondsive">
            <thead>
                <tr class="my-title">
                    <th scope="col" style="width: 40%"></th>
                    <!-- <th scope="col">
                        Cơ bản<br />
                        <span>Khởi đầu cho doanh nghiệp</span>
                    </th> -->

                    <?php
                    $result = mysqli_query($con, "SELECT * FROM item");
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <th scope="col">
                            <?php echo $row["name"]; ?><br />
                            <!-- <span>Khởi đầu cho doanh nghiệp</span> -->
                        </th>

                    <?php
                        $i++;
                    }

                    ?>
                </tr>






                <!-- <th scope="col">
                Shopify<br />
                <span>Phát triển doanh nghiệp</span>
            </th> -->
                <!-- <th scope="col" style="width: 20%">
						<span class="font-weight:bolder">Shopify<br /></span>
						<span>Phát triển doanh nghiệp</span>
					</th> -->
                <!-- <th scope="col">
                Nâng cao <br />
                <span>Mở rộng doanh nghiệp</span>
            </th> -->
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
					<td>Chi phí mỗi tháng</td>
					<td><span class="strong-text">299.000</span><span class="sub-align">/1thang</span></td>

					<td><span class="strong-text">799.000</span><span class="sub-align">/1thang</span></td>

					<td><span class="strong-text">2.999.000</span><span class="sub-align">/1thang</span></td>
				</tr>

				<tr class="my-second-title">
					<td colspan="4">ĐIỂM ĐẶC TRƯNG</td>
				</tr>

				<tr>
					<td>Cửa hàng Online</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Không giới hạn số sản phẩm</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Tài khoản nhân viên<br />Nhân viên với vai trò quản trị hoặc POS</td>
					<td><span>2</span></td>
					<td><span>5</span></td>
					<td><span>15</span></td>
				</tr>

				<tr>
					<td>Hỗ trợ 24/7</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>
						Kênh bán hàng<br />
						Bán trên phiên chợ online, mạng xã hội.<br />
						Các kênh khả dụng tùy thuộc mỗi quốc gia
					</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Vị trí<br />Chỉ định kho bãi, quảng cáo, nơi bạn lưu trữ sản phẩm</td>
					<td><span>Tối đa 4</span></td>
					<td><span>Tối đa 5</span></td>
					<td><span>Tối đa 6</span></td>
				</tr>

				<tr>
					<td>Tạo đơn đặt hàng thủ công</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Mã giảm giá</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Chứng chỉ SSL miến phí</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Phục hồi giỏ hàng bị hủy</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Thẻ quà tặng</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Báo cáo chuyên môn</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Xây dựng cáo cáo chuyên môn</td>
					<td>-</td>
					<td>-</td>
					<td>-<span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Giá cước vận chuyển của bên thứ ba<br />Hiển thị bảng giá của bạn hoặc của bên thứ ba</td>
					<td>-</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>

				<tr class="my-second-title">
					<td colspan="4">SHOPIFY GIAO HÀNG</td>
				</tr>
				<tr>
					<td>Giảm giá vận chuyển<br />Giá cước vận chuyển cạnh tranh từ DHL Express, UPS hoặc USPS.</td>
					<td>64%</td>
					<td>72%</td>
					<td>74%</td>
				</tr>

				<tr>
					<td>In mã vận chuyển</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Giá dịch vụ bưu chính hoa kỳ ưu tiên</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr class="my-second-title">
					<td colspan="4">SHOPIFY dịch vụ thanh toán</td>
				</tr>
				<tr>
					<td>Phí thanh toán thẻ tín dụng online</td>
					<td>2.9% + 30¢ USD</td>
					<td>2.6% + 30¢ USD</td>
					<td>2.4% + 30¢ USD</td>
				</tr>
				<tr>
					<td>Phí thanh toán thẻ tín dụng online</td>
					<td>2.7% + 0¢ USD</td>
					<td>2.5% + 0¢ USD</td>
					<td>2.4% + 0¢ USD</td>
				</tr>
				<tr>
					<td>Phí thanh toán thẻ tín dụng trực tiếp</td>
					<td>2.0%</td>
					<td>1.0%</td>
					<td>0.5%</td>
				</tr>
				<tr>
					<td>Phụ phí khi sử dụng dịch vụ thanh toán không thuộc Shopify</td>
					<td>+$89 USD/1 tháng</td>
					<td>+$89 USD/1 tháng</td>
					<td>+$89 USD/1 tháng</td>
				</tr>
				<tr class="my-second-title">
					<td colspan="4">Điểm bán hàng</td>
				</tr>
				<tr>
					<td>Mua sắm POS Lite<br />Chấp nhận thanh toán trực tiếp ngay lập tức tại web, hội chợ, ...</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Shopify POS Pro<br />Các công cụ quản lý cửa hàng và các tính năng đa kênh cần thiết cho các doanh nghiệp.</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr class="my-second-title">
					<td colspan="4">Bán hàng xuyên quốc gia.</td>
				</tr>
				<tr>
					<td>Sử dụng 133 loại tiền tệ</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Tỷ lệ ngoại hối<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr>
				<tr>
					<td>Bán hàng đa ngôn ngữ<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
					<td>-</td>
					<td>Tối đa 2</td>
					<td>Tối đa 5</td>
				</tr>
				<tr>
					<td>
						Tên miền quốc tế<br />
						Đặt tên miền theo quốc gia cụ thể để tối ưu hóa SEO quốc tế<br />
					</td>
					<td>-</td>
					<td><span class="my-ok-icon">&#10003;</span></td>
					<td><span class="my-ok-icon">&#10003;</span></td>
				</tr> -->
            </tbody>
        </table>
        <!-- Ending Table Part -->
        <!-- Table responsive for BASIC -->
        <div class="btn-group-vertical">
            <button type="button" id="button3" onclick="myFunction1()">Cơ bản</button>
            <button type="button" id="button2" onclick="myFunction2()">Shopify</button>
            <button type="button" id="button1" onclick="myFunction3()">Nâng cao</button>
        </div>
        <!-- TABLE BASIC -->
        <table class="table" id="my-table-basic">
            <thead>
                <tr style="border: none">
                    <th scope="col" colspan="2" style="width: 20%">
                        <span style="font-weight: bolder; font-size: 1.5em">Cơ bản<br /></span>
                        <span>Khởi đầu cho doanh nghiệp</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chi phí mỗi tháng</td>
                    <td><span class="strong-text">299.000</span><span class="sub-align">/1thang</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">ĐIỂM ĐẶC TRƯNG</td>
                </tr>

                <tr>
                    <td>Cửa hàng Online</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Không giới hạn số sản phẩm</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tài khoản nhân viên<br />Nhân viên với vai trò quản trị hoặc POS</td>
                    <td><span>2</span></td>
                </tr>

                <tr>
                    <td>Hỗ trợ 24/7</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>
                        Kênh bán hàng<br />
                        Bán trên phiên chợ online, mạng xã hôi.<br />
                        Các kênh khả dụng tùy thuộc mỗi quốc gia
                    </td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Vị trí<br />Chỉ định kho bãi, quảng cáo, nơi bạn lưu trữ sản phẩm</td>
                    <td><span>Tối đa 4</span></td>
                </tr>

                <tr>
                    <td>Tạo đơn đặt hàng thủ công</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Mã giảm giá</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Chứng chỉ SSL miến phí</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Phục hồi giỏ hàng bị hủy</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Thẻ quà tặng</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Báo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Xây dựng cáo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Giá cước vận chuyển của bên thứ ba<br />Hiển thị bảng giá của bạn hoặc của bên thứ ba</td>
                    <td>-</td>
                </tr>

                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY GIAO HÀNG</td>
                </tr>
                <tr>
                    <td>Giảm giá vận chuyển<br />Giá cước vận chuyển cạnh tranh từ DHL Express, UPS hoặc USPS.</td>
                    <td>64%</td>
                </tr>

                <tr>
                    <td>In mã vận chuyển</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Giá dịch vụ bưu chính hoa kỳ ưu tiên</td>
                    <td>-</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY dịch vụ thanh toán</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.9% + 30¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.7% + 0¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng trực tiếp</td>
                    <td>2.0%</td>
                </tr>
                <tr>
                    <td>Phụ phí khi sử dụng dịch vụ thanh toán không thuộc Shopify</td>
                    <td>+$89 USD/1 tháng</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Điểm bán hàng</td>
                </tr>
                <tr>
                    <td>Mua sắm POS Lite<br />Chấp nhận thanh toán trực tiếp ngay lập tức tại web, hội chợ, ...</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Shopify POS Pro<br />Các công cụ quản lý cửa hàng và các tính năng đa kênh cần thiết cho các doanh nghiệp.</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Bán hàng xuyên quốc gia.</td>
                </tr>
                <tr>
                    <td>Sử dụng 133 loại tiền tệ</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tỷ lệ ngoại hối<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Bán hàng đa ngôn ngữ<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>
                        Tên miền quốc tế<br />
                        Đặt tên miền theo quốc gia cụ thể để tối ưu hóa SEO quốc tế<br />
                    </td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <!-- TABLE BASIC -->
        <!-- TABLE SHOPIFY -->

        <table class="table" id="my-table-shopify">
            <thead>
                <tr style="border: none">
                    <th scope="col" colspan="2" style="width: 50%">
                        <br />
                        <span style="font-weight: bolder; font-size: 1.5em">Phát triển<br /></span>
                        <span style="border: none">Phát triển doanh nghiệp</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chi phí mỗi tháng</td>
                    <td><span class="strong-text">299.000</span><span class="sub-align">/1thang</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">ĐIỂM ĐẶC TRƯNG</td>
                </tr>
                <tr>
                    <td>Cửa hàng Online</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Không giới hạn số sản phẩm</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tài khoản nhân viên<br />Nhân viên với vai trò quản trị hoặc POS</td>
                    <td><span>2</span></td>
                </tr>

                <tr>
                    <td>Hỗ trợ 24/7</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>
                        Kênh bán hàng<br />
                        Bán trên phiên chợ online, mạng xã hôi.<br />
                        Các kênh khả dụng tùy thuộc mỗi quốc gia
                    </td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Vị trí<br />Chỉ định kho bãi, quảng cáo, nơi bạn lưu trữ sản phẩm</td>
                    <td><span>Tối đa 4</span></td>
                </tr>

                <tr>
                    <td>Tạo đơn đặt hàng thủ công</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Mã giảm giá</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Chứng chỉ SSL miến phí</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Phục hồi giỏ hàng bị hủy</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Thẻ quà tặng</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Báo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Xây dựng cáo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Giá cước vận chuyển của bên thứ ba<br />Hiển thị bảng giá của bạn hoặc của bên thứ ba</td>
                    <td>-</td>
                </tr>

                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY GIAO HÀNG</td>
                </tr>
                <tr>
                    <td>Giảm giá vận chuyển<br />Giá cước vận chuyển cạnh tranh từ DHL Express, UPS hoặc USPS.</td>
                    <td>64%</td>
                </tr>

                <tr>
                    <td>In mã vận chuyển</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Giá dịch vụ bưu chính hoa kỳ ưu tiên</td>
                    <td>-</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY dịch vụ thanh toán</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.9% + 30¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.7% + 0¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng trực tiếp</td>
                    <td>2.0%</td>
                </tr>
                <tr>
                    <td>Phụ phí khi sử dụng dịch vụ thanh toán không thuộc Shopify</td>
                    <td>+$89 USD/1 tháng</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Điểm bán hàng</td>
                </tr>
                <tr>
                    <td>Mua sắm POS Lite<br />Chấp nhận thanh toán trực tiếp ngay lập tức tại web, hội chợ, ...</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Shopify POS Pro<br />Các công cụ quản lý cửa hàng và các tính năng đa kênh cần thiết cho các doanh nghiệp.</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Bán hàng xuyên quốc gia.</td>
                </tr>
                <tr>
                    <td>Sử dụng 133 loại tiền tệ</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tỷ lệ ngoại hối<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Bán hàng đa ngôn ngữ<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>
                        Tên miền quốc tế<br />
                        Đặt tên miền theo quốc gia cụ thể để tối ưu hóa SEO quốc tế<br />
                    </td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <!-- TABLE ANVANCE -->
        <table class="table" id="my-table-advance">
            <thead>
                <tr style="border: none">
                    <!-- <th scope="col" colspan="2"><span style="font-weight:bolder">Mở rộng</span>
						<span>Mở rộng cho doanh nghiệp</span>
					</th> -->
                    <th scope="col" colspan="2" style="width: 20%">
                        <span style="font-weight: bolder; font-size: 1.5em">Mở rộng<br /></span>
                        <span>Mở rộng cho doanh nghiệp</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chi phí mỗi tháng</td>
                    <td><span class="strong-text">299.000</span><span class="sub-align">/1thang</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">ĐIỂM ĐẶC TRƯNG</td>
                </tr>

                <tr>
                    <td>Cửa hàng Online</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Không giới hạn số sản phẩm</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tài khoản nhân viên<br />Nhân viên với vai trò quản trị hoặc POS</td>
                    <td><span>2</span></td>
                </tr>

                <tr>
                    <td>Hỗ trợ 24/7</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>
                        Kênh bán hàng<br />
                        Bán trên phiên chợ online, mạng xã hôi.<br />
                        Các kênh khả dụng tùy thuộc mỗi quốc gia
                    </td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Vị trí<br />Chỉ định kho bãi, quảng cáo, nơi bạn lưu trữ sản phẩm</td>
                    <td><span>Tối đa 4</span></td>
                </tr>

                <tr>
                    <td>Tạo đơn đặt hàng thủ công</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Mã giảm giá</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Chứng chỉ SSL miến phí</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Phục hồi giỏ hàng bị hủy</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Thẻ quà tặng</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Báo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Xây dựng cáo cáo chuyên môn</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Giá cước vận chuyển của bên thứ ba<br />Hiển thị bảng giá của bạn hoặc của bên thứ ba</td>
                    <td>-</td>
                </tr>

                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY GIAO HÀNG</td>
                </tr>
                <tr>
                    <td>Giảm giá vận chuyển<br />Giá cước vận chuyển cạnh tranh từ DHL Express, UPS hoặc USPS.</td>
                    <td>64%</td>
                </tr>

                <tr>
                    <td>In mã vận chuyển</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Giá dịch vụ bưu chính hoa kỳ ưu tiên</td>
                    <td>-</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">SHOPIFY dịch vụ thanh toán</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.9% + 30¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng online</td>
                    <td>2.7% + 0¢ USD</td>
                </tr>
                <tr>
                    <td>Phí thanh toán thẻ tín dụng trực tiếp</td>
                    <td>2.0%</td>
                </tr>
                <tr>
                    <td>Phụ phí khi sử dụng dịch vụ thanh toán không thuộc Shopify</td>
                    <td>+$89 USD/1 tháng</td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Điểm bán hàng</td>
                </tr>
                <tr>
                    <td>Mua sắm POS Lite<br />Chấp nhận thanh toán trực tiếp ngay lập tức tại web, hội chợ, ...</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Shopify POS Pro<br />Các công cụ quản lý cửa hàng và các tính năng đa kênh cần thiết cho các doanh nghiệp.</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr class="my-second-title">
                    <td colspan="2">Bán hàng xuyên quốc gia.</td>
                </tr>
                <tr>
                    <td>Sử dụng 133 loại tiền tệ</td>
                    <td><span class="my-ok-icon">&#10003;</span></td>
                </tr>
                <tr>
                    <td>Tỷ lệ ngoại hối<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Bán hàng đa ngôn ngữ<br />Kiểm soát giá cả cho người mua quốc tế với một tỷ giá ngoại hối cố định.</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>
                        Tên miền quốc tế<br />
                        Đặt tên miền theo quốc gia cụ thể để tối ưu hóa SEO quốc tế<br />
                    </td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <!-- END TABLE ADVANCE -->
        <!--Body Part 3-->

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <strong>Shopify Plus</strong> <br />
                    Các giải pháp cấp doanh nghiệp cho các thương nhân lớn và các doanh nghiệp lớn. <br />
                </div>
                <div class="col-sm-6">
                    <strong>Shopify Lite</strong> <br />
                    Thêm sản phẩm vào bất kỳ trang web hoặc blog nào và chấp nhận thanh toán bằng thẻ tín dụng chỉ với $ 9 USD mỗi tháng.<br />
                </div>
            </div>

            <p style="margin-top: 3em">Shopify thu thuế bán hàng tại các tiểu bang nơi luật pháp yêu cầu. Giá đã nêu không bao gồm các loại thuế này</p>
        </div>
        <!--Body Part 3-->

        <!--Body Part 4-->

        <div class="jumbotron">
            <h1>Xây dựng cửa hàng trước, xây dựng kế hoạch sau.</h1>
            <br />
            <p class="lead">
                <a class="btn btn-dark" href="./login.php">Dùng thử miễn phí</a>
            </p>
        </div>
        <!--Body Part 4-->

        <!-- FOOTER PART -->
        <div id="footer">
            <div class="container-fluid my-footer" style="background-color: #002e25; margin-top: -30px">
                <div id="my-footer-top" style="border-bottom: 1px solid rgba(210, 213, 217, 0.1)">
                    <nav class="navbar navbar-expand-lg" id="my-footer-top-desk">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giá</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="my-footer-top-mobile">
                        <div class="row" style="padding-top: 3em; padding-bottom: 3em">
                            <div class="col-12 col-md-4">
                                <a href="#">Trang chủ</a><br />
                                <a href="#">Thông tin</a> <br />
                                <a href="#">Giá</a> <br />
                                <a href="#">Liên hệ</a> <br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px">
                    <div class="col-4 col-md-4">
                        <a href="#" class="my-title-col">HỖ TRỢ </a><br />
                        <a href="#">24/7 </a><br />
                        <a href="#">Diễn đàn </a>
                    </div>
                    <div class="col-4 col-md-4">
                        <a href="#" class="my-title-col">SHOPIFY</a><br />
                        <a href="#">Liên hệ </a><br />
                        <a href="#">Thông tin </a>
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
        <!-- END FOOTER PART -->
        <li>
            <a class='table' id="check">
                Click here

            </a>
        </li>
        <!-- <div class="row">
			<div class="col-sm-12">
				<a id="myview" href="./pricing.php">Bảng giá</a>
			</div>
		</div> -->
        <div id="other">
            Trigger the handler
        </div>
        <script>
            // $("#myview").click(function() {
            // 	var tr_str = '<div>check</div>'
            // 	$("#my-table-respondsive tbody").append(tr_str);
            // });
            var x = document.getElementById("my-table-basic");
            var y = document.getElementById("my-table-shopify");
            var z = document.getElementById("my-table-advance");
            var i = window.matchMedia("(max-width: 1200px)")

            function myFunctionn(x) {
                if (!i.matches) {
                    document.getElementById("my-table-advance").style.display = "none";
                    document.getElementById("my-table-basic").style.display = "none";
                    document.getElementById("my-table-shopify").style.display = "none";
                }
            }
            var i = window.matchMedia("(max-width: 1200px)")
            myFunctionn(x)
            i.addListener(myFunctionn)

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
            // document.getElementById("my-table-respondsive").innerHTML = window.myFunction(10, 2); 
        </script>
    </div>
</body>

</html>