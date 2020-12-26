<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title>Sell</title>
		<link rel="stylesheet" href="css/bootstrap-4.5.3-dist/css/bootstrap.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/sell.css" />
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
								<a class="company-name" href="./index.html">shopify</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<a href="./pricing.html">Bảng giá</a>
							</div>
							<div class="col-sm-12">
								<a href="./examples.html">Sản phẩm mẫu</a>
							</div>
							<div class="col-sm-12">
								<a href="./login.html">Đăng nhập</a>
							</div>
							<div class="col-sm-12">
								<a href="./register.html">Đăng ký</a>
							</div>
							<div class="col-sm-12">
								<button onclick="window.location.href='login.html'">Bắt đầu ngay</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<a href="./about.html">Về chúng tôi</a>
							</div>
							<div class="col-sm-12">
								<a href="./contact.html">Liên hệ</a>
							</div>
						</div>
					</div>
				</div>

				<nav class="header-navbar navbar navbar-expand-md navbar-light">
					<div class="navbar-brand">
						<img src="img/shopify-seeklogo.com.svg" class="logo" alt="Logo" />
						<a class="nav-link company-name" href="./index.html">shopify</a>
					</div>

					<button class="navbar-toggler" type="button" onclick="openNav()">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="header-menu">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="./about.html">Về chúng tôi</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./pricing.html">Bảng giá</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./login.html">Đăng nhập</a>
							</li>
							<li class="nav-item">
								<a class="nav-link last-item" href="./login.html">Bắt đầu ngay</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="row intro">
				<div class="col-md-6 intro_text">
					<h1 class="heading">
						<span class="hightlight">Bán hàng -</span><br />
						mọi nơi
					</h1>
					<p class="sub_head">Một trang web giúp bạn bán hàng bất cứ khi nào khách hàng online, hoặc bất cứ khi nào có kết nối giữa các bạn</p>
					<div class="row option">
						<a href="" class="col-md-6 choice">
							<p class="head_highlight">Cửa hàng trực tuyến</p>
							<p>Buôn bán trực tuyến với các trang web thương mại</p>
						</a>
						<a href="" class="col-md-6 choice">
							<p class="head_highlight">Phần mềm bán hàng</p>
							<p>Bán hàng tại các điểm bán lẻ, quảng cáo và nhiều hơn nữa</p>
						</a>
						<a href="" class="col-md-6 choice">
							<p class="head_highlight">Mua chỉ với một nút bấm</p>
							<p>Thêm các trang thương mại điện tử vào bất kì web hay blog nào !</p>
						</a>
						<a href="" class="col-md-6 choice">
							<p class="head_highlight">Các trang bán hàng</p>
							<p>Bán hàng ở trên các trang social media, các trang bán hàng online,...</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 intro_image">
					<img src="img/girl.png" alt="girl" class="girl" />
					<img src="img/little_tree.png" class="tree" alt="tree" />
					<img src="img/street.png" class="street" alt="street" />
				</div>
			</div>

			<div class="row online_store">
				<div class="col-md-6 online_store_text">
					<div>
						<p>TỰ TRANG TRÍ CỬA HÀNG CỦA RIÊNG BẠN</p>
						<h2>Thiết kế logo theo cách của bạn</h2>
						<p class="marg">Mang sản phẩm của bạn đến với mọi người.</p>
					</div>
					<div class="store_hidden hidden">
						<img src="img/background_laptop.png" alt="background-laptop" class="background_laptop" />
						<video class="video" preload="auto" autoplay loop="loop" muted="muted">
							<source src="img/video.mp4" type="video/mp4" />
						</video>
					</div>
					<div class="detail">
						<h3>Hơn 70 giao diện</h3>
						<p>Thiết kế thương hiệu của bạn trên những giao diện tuyệt đẹp</p>
					</div>
					<div class="detail">
						<h3>Kéo thả dễ dàng</h3>
						<p>Thiết kế trang web của bạn mà không cần code.</p>
					</div>
					<div class="detail">
						<h3>Tự điều chỉnh mọi thứ</h3>
						<p>Mọi thứ thật dễ dàng thông qua trang web của chúng tôi.</p>
					</div>
					<div>
						<a href="">Tìm hiểu thêm về cửa hàng trực tuyến -></a>
					</div>
				</div>
				<div class="col-md-6 online_store_image">
					<img src="img/background_laptop.png" class="background_laptop" alt="background-laptop" />
					<video class="video" preload="auto" autoplay loop="loop" muted="muted">
						<source src="img/video.mp4" type="video/mp4" />
					</video>
				</div>
			</div>

			<div class="row point_of_sale">
				<div class="col-md-6 point_of_sale_text">
					<div>
						<p>PHẦN MỀM BÁN HÀNG</p>
						<h2>Trải nghiệm tuyệt vời</h2>
						<p>Nâng cao khả năng kết nối</p>
					</div>
					<div class="point_hidden hidden">
						<img src="img/sale_girl.png" class="sale_girl" alt="sale-girl" />
						<img src="img/device.png" class="device" alt="device" />
						<img src="img/phone.png" class="phone" alt="phone" />
					</div>
					<div class="detail">
						<h3>Một cửa hàng tốt hơn</h3>
						<p>Cho khách hàng cảm giác thoải mái và tiện lợi hơn.</p>
					</div>
					<div class="detail">
						<h3>Dễ sử dụng cả phần cứng lẫn phần mềm</h3>
						<p>Đơn giản hóa mọi thứ.</p>
					</div>
					<div class="detail">
						<h3>Mọi thứ thật đơn giản.</h3>
						<p>Chỉ cần một công cụ để quản lý tất cả sản phẩm và khách hàng một cách tiện lợi.</p>
					</div>
					<div>
						<a href="">Tìm hiểu thêm về phần mềm bán hàng -></a>
					</div>
				</div>
				<div class="col-md-6 point_of_sale_image">
					<img src="img/sale_girl.png" class="sale_girl" alt="sale-girl" />
						<img src="img/device.png" class="device" alt="device" />
						<img src="img/phone.png" class="phone" alt="phone" />
				</div>
			</div>
			<div class="row buy">
				<div class="col-md-6 buy_text">
					<div>
						<p>MUA BÁN LINH HOẠT</p>
						<h2>Thương mại hóa khắp mọi nơi</h2>
						<p>Biến bất cứ trang web hay blog trở thành một cửa hàng trực tuyến</p>
					</div>
					<div class="buy_image_hidden hidden">
						<img src="img/bottle.png" class="bottle" alt="bottle" />
						<img src="img/buy.PNG" class="buy_pic" alt="buy" />
						<img src="img/code.png" class="code" alt="code" />
					</div>
					<div class="detail">
						<h3>Sản phẩm</h3>
						<p>Thêm sản phẩm bạn muốn ở bất cứ đâu, kể cả Squarespace và WordPress.</p>
					</div>
					<div class="detail">
						<h3>An toàn mua sắm</h3>
						<p>Thêm trải nghiệm thanh toán an toàn trên điện thoại di động.</p>
					</div>
					<div class="detail">
						<h3>Tự thiết kế các nút bấm đơn giản</h3>
						<p>Tạo một cửa hàng tuyệt đẹp với các blog hoặc trang web có sẵn.</p>
					</div>
					<div>
						<a href="">Tìm hiểu thêm về trang mua sắm -></a>
					</div>
				</div>
				<div class="col-md-6 buy_image">
					<img src="img/bottle.png" class="bottle" alt="bottle" />
						<img src="img/buy.PNG" class="buy_pic" alt="buy" />
						<img src="img/code.png" class="code" alt="code" />
				</div>
			</div>
			<div class="row channel">
				<div class="col-md-6 channel_text">
					<div>
						<p>CÁC TRANG BÁN HÀNG</p>
						<h2>Tiếp cận đến nhiều người hơn</h2>
						<p>Đưa sản phẩm của bạn ra cộng đồng nhanh gọn.</p>
					</div>
					<div class="channel_image_hidden hidden">
						<img src="img/chat.PNG" class="chat" alt="chat" />
					</div>
					<div class="detail">
						<h3>Social media</h3>
						<p>Phát triển nhanh chóng thông qua các kênh truyền thông như Instagram hay Facebook.</p>
					</div>
					<div class="detail">
						<h3>"Khu chợ" trực tuyến</h3>
						<p>Mở rộng doanh nghiệp của bạn khi truy cập vào mạng lưới khổng lồ.</p>
					</div>
					<div>
						<a href="">Tìm hiểu về các trang bán hàng -></a>
					</div>
				</div>
				<div class="col-md-6 channel_image">
					<img src="img/chat.PNG" class="chat" alt="chat" />
				</div>
			</div>
			<div class="row">
				<div class="start_sell">
					<h2>Hãy bắt đầu bán hàng với chúng tôi ngay hôm nay</h2>
					<p>Trải nghiệm hoàn toàn miễn phí, tất cả bạn cần làm là nhấn, chạy và phát triển doanh nghiệp của bạn.</p>
					<button onclick="window.location.href='./login.html'">Bất đầu ngay</button>
				</div>
			</div>
			<div class="row end"></div>
			<div id="footer">
				<div class="container-fluid my-footer" style="background-color: #002e25">
					<div id="my-footer-top" style="border-bottom: 1px solid rgba(210, 213, 217, 0.1)">
						<nav class="navbar navbar-expand-lg" id="my-footer-top-desk">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="./index.html">Trang chủ</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="./examples.html">Sản phẩm mẫu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="./pricing.html">Giá</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="./contact.html">Liên hệ</a>
								</li>
							</ul>
						</nav>
						<div id="my-footer-top-mobile">
							<div class="row">
								<div class="col-12 col-md-4">
									<a href="./index.html">Trang chủ</a><br />
									<a href="./examples.html">Sản phẩm mẫu</a> <br />
									<a href="./pricing.html">Giá</a> <br />
									<a href="./contact.html">Liên hệ</a> <br />
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="padding-top: 40px">
						<div class="col-4 col-md-4">
							<a href="./contact.html" class="my-title-col">HỖ TRỢ </a><br />
							<a href="#">24/7 </a><br />
							<a href="#">Diễn đàn </a>
						</div>
						<div class="col-4 col-md-4">
							<a href="./index.html" class="my-title-col">SHOPIFY</a><br />
							<a href="./contact.html">Liên hệ </a><br />
							<a href="./examples.html">Sản phẩm mẫu </a>
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
