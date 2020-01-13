<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>KQT Bakerry</title>
	<link href="http://fonts.googleapis.com/css?family=Dosis:300,400" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css" />
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css" />
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css" />
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css" />
	<link rel="stylesheet" href="assets/dest/css/animate.css" />
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css" />
	<link rel="stylesheet" title="style" href="assets/bootstrap/fonts/.css" />
</head>

<body>
	<div id="header">
		<?php 
		include 'subpage/header.php';
		?>
	</div>
	<!-- #header -->

	<?php
		session_start();
		$conn = connect();
		mysqli_set_charset($conn, 'utf8');
		$sql = "SELECT * FROM slider ORDER BY id";
		$result = mysqli_query($conn, $sql);
		$row = array();
		$i=0;
		foreach ($result as $row)
		{
		}
	?>
	

	<div class="rev-slider">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
				<div class="bannercontainer">
					<div class="banner">
						<ul>
						
							<!-- THE FIRST SLIDE -->
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
								style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="image/slide/banner1.jpg"
										data-src="image/slide/banner1.jpg"
										style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/banner1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
									</div>
								</div>
							</li>
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
								style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
										data-src="assets/dest/images/thumbs/1.jpg"
										style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
									</div>
								</div>
							</li>

							<li data-transition="boxfade" data-slotamount="20" class="active-revslide"
								style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
										data-src="assets/dest/images/thumbs/1.jpg"
										style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
									</div>
								</div>
							</li>

							<li data-transition="boxfade" data-slotamount="20"
								class="active-revslide current-sr-slide-visible"
								style="width: 100%; height: 100%; overflow: hidden; visibility: inherit; opacity: 1; z-index: 20;">
								<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
									data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
									data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
									data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
									data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
									data-oheight="undefined">
									<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
										data-bgposition="center center" data-bgrepeat="no-repeat"
										data-lazydone="undefined" src="assets/dest/images/thumbs/1.jpg"
										data-src="assets/dest/images/thumbs/1.jpg"
										style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('assets/dest/images/thumbs/1.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!--slider-->
		<?php
								
								disconnect($conn);

							?>
	</div>


		<?php

			$conn = connect();
			mysqli_set_charset($conn, 'utf8');
			$sql = "SELECT * FROM products ORDER BY created_at desc LIMIT 8";
			$result = mysqli_query($conn, $sql);
			$num_row = mysqli_num_rows($result)
		?>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">Có <?php echo "$num_row" ?> sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">


							<?php
							while ($row = mysqli_fetch_assoc($result)) { 
							?>
								
								
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="image/product/<?php echo $row['image'] ?>" alt="" /></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">
												<?php echo $row['name'] ?>
											</p>
											<p class="single-item-price">
												<span><?php echo $row['unit_price'] ?>đ</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i
													class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i
													class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<?php
								}
								disconnect($conn);
							?>
								
									
							</div>
						</div>
						
					</div>
				</div>
				<!-- end section with sidebar and main content -->
			</div>
			<!-- .main-content -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->

	<div id="footer" class="color-div">
		<?php 
			include 'subpage/footer.php';
		?>
	</div>
	<!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div>
		<!-- .container -->
	</div>
	<!-- .copyright -->

	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
		$(document).ready(function ($) {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 150) {
					$(".header-bottom").addClass("fixNav");
				} else {
					$(".header-bottom").removeClass("fixNav");
				}
			});
		});
	</script>
</body>

</html>