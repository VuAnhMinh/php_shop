<?php
$conn = mysqli_connect('localhost','root','root','db_banhang') or die('Không thể kết nối!');
mysqli_set_charset($conn, 'utf8');
$_SESSION['sql'] = "SELECT * FROM products";
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$_SESSION['total'] = mysqli_num_rows($result);
require_once 'backend-index.php';
?>
<div class="header-top">
	<div class="container">
		<div class="pull-left auto-width-left">
			<ul class="top-menu menu-beta l-inline">
				<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
				<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
			</ul>
		</div>
		<div class="pull-right auto-width-right">
			<ul class="top-details menu-beta l-inline">
				<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
				<li><a href="signup.php">Đăng kí</a></li>
				<li><a href="login.php">Đăng nhập</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div> <!-- .container -->
</div> <!-- .header-top -->
<div class="header-body">
	<div class="container beta-relative">
		<div class="pull-left">
			<a href="index.php" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
		</div>
		<div class="pull-right beta-components space-left ov">
			<div class="space10">&nbsp;</div>
			<div class="beta-comp">
				<form role="search" method="get" id="searchform" action="/">
			        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
			        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
				</form>
			</div>

			<div class="beta-comp">
				<div class="cart">
					<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
					<div class="beta-dropdown cart-body">
						<div class="cart-item">
							<div class="media">
								<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/1.png" alt=""></a>
								<div class="media-body">
									<span class="cart-item-title">Sample Woman Top</span>
									<span class="cart-item-options">Size: XS; Colar: Navy</span>
									<span class="cart-item-amount">1*<span>$49.50</span></span>
								</div>
							</div>
						</div>

						<div class="cart-item">
							<div class="media">
								<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
								<div class="media-body">
									<span class="cart-item-title">Sample Woman Top</span>
									<span class="cart-item-options">Size: XS; Colar: Navy</span>
									<span class="cart-item-amount">1*<span>$49.50</span></span>
								</div>
							</div>
						</div>

						<div class="cart-item">
							<div class="media">
								<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
								<div class="media-body">
									<span class="cart-item-title">Sample Woman Top</span>
									<span class="cart-item-options">Size: XS; Colar: Navy</span>
									<span class="cart-item-amount">1*<span>$49.50</span></span>
								</div>
							</div>
						</div>

						<div class="cart-caption">
							<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
							<div class="clearfix"></div>

							<div class="center">
								<div class="space10">&nbsp;</div>
								<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div> <!-- .cart -->
			</div>
		</div>
		<div class="clearfix"></div>
	</div> <!-- .container -->
</div> <!-- .header-body -->
<div class="header-bottom" style="background-color: #0277b8;">
	<div class="container">
		<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
		<div class="visible-xs clearfix"></div>
		<nav class="main-menu">
			<ul class="l-inline ov">
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="product_type.php">Sản phẩm</a>
					<ul class="sub-menu">
						<?php
			
			$conn = connect();
			mysqli_set_charset($conn, 'utf8');
			$sql = "SELECT * FROM type_products";
			$result = mysqli_query($conn, $sql);
			$num_row = mysqli_num_rows($result)
			
						?>
						<?php
							while ($row = mysqli_fetch_assoc($result)) { 
						?>
						<li><a href="product_small_type.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
						<?php
								}
								disconnect($conn);
							?>
					</ul>
				</li>
				<li><a href="about.php">Giới thiệu</a></li>
				<li><a href="contacts.php">Liên hệ</a></li>
			</ul>
			<div class="clearfix"></div>
		</nav>
	</div> <!-- .container -->
</div> <!-- .header-bottom -->