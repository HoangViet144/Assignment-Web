<!DOCTYPE html>
<html lang="vi">
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
						<a class="company-name nav-link" href="./index.html">shopify</a>
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
					<div class="row">
						<div class="row first-item">
							<img src="img/example_pic2.webp" alt="pic2" />
						</div>
						<div class="row item-name">
							<a href="https://www.mollyjogger.com/">Mollyjogger</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic3.webp" alt="pic3" />
							</div>
							<div class="row item-name">
								<a href="https://www.denydesigns.com/">DENY Designs</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic4.webp" alt="pic4" />
							</div>
							<div class="row item-name">
								<a href="https://dowsedesign.co.uk/">Dowse Design</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic5.jpg" alt="pic5" />
							</div>
							<div class="row item-name">
								<a href="https://raredevice.net/">Rare Device</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic6.webp" alt="pic6" />
							</div>
							<div class="row item-name">
								<a href="https://missboon.ca/">Miss Boon</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic7.webp" alt="pic7" />
							</div>
							<div class="row item-name">
								<a href="https://www.the-citizenry.com/">The Citizenry</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic8.webp" alt="pic8" />
							</div>
							<div class="row item-name">
								<a href="https://shophorne.com/">Horne</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic9.webp" alt="pic9" />
							</div>
							<div class="row item-name">
								<a href="https://www.polyandbark.com/">Poly & Bark</a>
							</div>
						</div>
					</div>
				</div>

				<div class="examples hide book">
					<div class="row">
						<div class="row first-item">
							<img src="img/example_pic10.webp" alt="pic10" />
						</div>
						<div class="row item-name">
							<a href="https://lindsayletters.co/">Lindsay Letters</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic11.webp" alt="pic11" />
							</div>
							<div class="row item-name">
								<a href="https://abookapart.com/">A Book Apart</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic12.webp" alt="pic12" />
							</div>
							<div class="row item-name">
								<a href="https://greerchicago.com/">GREERChicago</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic13.webp" alt="pic13" />
							</div>
							<div class="row item-name">
								<a href="https://www.cookbookvillage.com/">Cookbook Village</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic14.webp" alt="pic14" />
							</div>
							<div class="row item-name">
								<a href="https://www.thelacmastore.org/"> LA County Museum of Art - Mu</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic15.webp" alt="pic15" />
							</div>
							<div class="row item-name">
								<a href="https://www.shopbookshop.com/">Book/Shop</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic16.webp" alt="pic16" />
							</div>
							<div class="row item-name">
								<a href="https://cca-bookstore.com/"> CAA Bookstore</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic17.webp" alt="pic17" />
							</div>
							<div class="row item-name">
								<a href="https://outerlayer.com/">Outer Layer</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic18.webp" alt="pic18" />
							</div>
							<div class="row item-name">
								<a href="https://www.hanjigifts.com/">Hanji Gifts</a>
							</div>
						</div>
					</div>
				</div>
				<div class="examples hide clothing">
					<div class="row">
						<div class="row first-item">
							<img src="img/example_pic19.webp" alt="pic19" />
						</div>
						<div class="row item-name">
							<a href="https://negativeunderwear.com/">Negative Underwear</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic20.jpg" alt="pic20" />
							</div>
							<div class="row item-name">
								<a href="https://www.3sixteen.com/">3sixteen</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic21.jpg" alt="pic21" />
							</div>
							<div class="row item-name">
								<a href="https://rodengray.com/"> Roden Gray</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic22.jpg" alt="pic22" />
							</div>
							<div class="row item-name">
								<a href="https://www.taylorstitch.com/">Taylor Stitch </a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic23.jpg" alt="pic23" />
							</div>
							<div class="row item-name">
								<a href="https://www.greats.com/">Greats</a>
							</div>
						</div>
					</div>
				</div>
				<div class="examples hide jewelry">
					<div class="row">
						<div class="row first-item">
							<img src="img/example_pic24.jpg" alt="pic24" />
						</div>
						<div class="row item-name">
							<a href="https://www.leifshop.com/">LEIF</a>
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic25.jpg" alt="pic25" />
							</div>
							<div class="row item-name">
								<a href="https://www.mooreaseal.com/">Moorea Seal</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic26.jpg" alt="pic26" />
							</div>
							<div class="row item-name">
								<a href="https://grovemade.com/">Grovermade</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic27.jpg" alt="pic27" />
							</div>
							<div class="row item-name">
								<a href="https://www.hardgraft.com/">hard graft</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic28.jpg" alt="pic28" />
							</div>
							<div class="row item-name">
								<a href="https://superteamdeluxe.com/"> Super Team Deluxe</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic29.webp" alt="pic29" />
							</div>
							<div class="row item-name">
								<a href="https://www.ilovebiko.com/">Biko</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic30.jpg" alt="pic30" />
							</div>
							<div class="row item-name">
								<a href="https://coreymoranis.com/"> Corey Moranis</a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic31.jpg" alt="pic31" />
							</div>
							<div class="row item-name">
								<a href="https://lilliputhats.com/">Liliput Hats </a>
							</div>
						</div>
						<div class="col-sm">
							<div class="row item-img">
								<img src="img/example_pic32.jpg" alt="pic32" />
							</div>
							<div class="row item-name">
								<a href="https://www.tesoro.design/">Tesoro Design </a>
							</div>
						</div>
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
					<button onclick="window.location.href='./login.html'">Bắt đầu ngay</button>
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
