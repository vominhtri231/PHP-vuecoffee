<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The VueCoffee</title>
	<link rel="stylesheet" href="user/view/style/master.css">
	<link rel="stylesheet" href="user/view/style/home.css">
</head>
<body>	
	<div id="container">
		<header>
			<div id="menubar" class="row">
				<div class="col3">
					<h3 class="row" style="height: 100%; align-items: center;">The VueCoffe Shop</h3>
				</div>
				<div class="col1"></div>
				<div class="col6" name="list">
					<ul class="row">
						<li class="col2"><a href="">GIỚI THIỆU</a></li>
						<li class="col2"><a href="">MENU</a></li>
						<li class="col2"><a href="">GIAO HÀNG</a></li>
						<li class="col2"><a href="">TIN TỨC</a></li>
						<li class="col2"><a href="">TUYỂN DỤNG</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div id="ContentHome">
			<div id="intropanel">
				<div class="background">
					<img src="user/view/image/pp-hot-coffee-rf-istock.jpg" alt="">
				</div>
				<div class="title">
					<h3>CÀ PHÊ NÀO!</h3>
					<button><a href="index.php?action=OrderPage">MUA NGAY</a></button>
				</div>
			</div>
			<div class="box" name="middle">
					<div id="categories">
						<ul>
							<li>
								<img src="user/view/image/tea.jpg" alt="" >
								<p class="title">Tea</p>
							</li>
							<li>
								<img src="user/view/image/mocktails.jpg" alt="" >
								<p class="title">Mocktail</p>
							</li>
							<li>
								<img src="user/view/image/landscape-1479775067-delish-hot-chocolate-float-1.jpg" alt="" >
								<p class="title">Chocolate</p>
							</li>
							<li>
								<img src="user/view/image/healthy-and-easy-fruit-smoothies-combined-with-alo.jpg" alt="">
								<p class="title">Smoothies</p>
							</li>
							<li>
								<img src="user/view/image/latte.jpg" alt="" >
								<p class="title">Latte</p>
							</li>
						</ul>
					</div>
					<div id="info">
						
					</div>
			</div>
			<div class="box" name="contact" id="contactBox">
				<h2>LIÊN HỆ</h2>
				<div class="row">
					<div class="col1"></div>
					<div id="contact" class="col4">
						<div class="row element">
							<p class="col3"></p>
							<input class="col7 text" type="text" id="Subject" name="Subject" placeholder="TÊN CỦA BẠN">
						</div>
						<div class="row element">
							<p class="col3"></p>
							<input class="col7 text" type="text" id="Email" name="Email" placeholder="EMAIL CỦA BẠN">
						</div>
						<div class="row element">
							<p class="col3"></p>
							<textarea  class="col7 content" id="EmailContent" name="id="Email"" rows="5" cols="50" placeholder="BÌNH LUẬN"></textarea>
						</div>
						<div class="row element">
							<div class="col3"></div>
							<button>Send</button>
						</div>
					</div>
					<div class="col2"></div>
					<div class="image col3">
						<img src="user/view/image/f02e5abdb78e0323b34491809503e38a.jpg" alt="" >
					</div>
				</div>
			</div>
		</div>
		<footer>
			<h3>The VueCoffee Shop</h3>
			<p>Địa chỉ: xxx - xxxxx - Đà Nẵng</p>
			<p>Hotline: 0935xxxxxx</p>
			<p>Giao hàng miễn phí : 1800 xxxx</p>
			<p><a href="">Điều khoản bảo mật</a></p>
			<div id="theCopyright">
				<p>&copy; 2017</p>
			</div>
		</footer>
	</div>
</body>
</html>