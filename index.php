<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Malcolm Lismore Photographer</title>
	<meta charset="UTF-8">
	<meta name="description" content="Malcolm Lismore Photography">
	<meta name="keywords" content="photography, html, photographer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Page Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="menu-wrapper">
		<div class="menu-switch">
			<i class="ti-menu"></i>
		</div>
		<div class="menu-social-warp">
			<div class="menu-social">
				<a href="#"><i class="ti-facebook"></i></a>
				<a href="#"><i class="ti-twitter-alt"></i></a>
				<a href="#"><i class="ti-linkedin"></i></a>
				<a href="#"><i class="ti-instagram"></i></a>
			</div>
		</div>
	</div>
	<div class="side-menu-wrapper">
		<div class="sm-header">
			<div class="menu-close">
				<i class="ti-arrow-left"></i>
			</div>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
				<br><br><br>
				<li><a href="signin.php">Sign in</a></li>
			</ul>
		</nav>
	</div>

	<!-- Hero Section -->
	<section class="hero-section">
		<div class="pana-accordion" id="accordion">
    		<div class="pana-accordion-wrap">
				<div class="pana-accordion-item set-bg" data-setbg="img/hero/1.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="pana-accordion-item set-bg" data-setbg="img/hero/2.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="pana-accordion-item set-bg" data-setbg="img/hero/3.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="pana-accordion-item set-bg" data-setbg="img/hero/4.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="pana-accordion-item set-bg" data-setbg="img/hero/5.webp">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
	    	</div>
		</div>
		<div class="hero-slider-warp">
			<div class="hero-slider owl-carousel">
				<div class="hero-item set-bg" data-setbg="img/hero/1.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="hero-item set-bg" data-setbg="img/hero/2.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="hero-item set-bg" data-setbg="img/hero/3.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="hero-item set-bg" data-setbg="img/hero/4.jpg">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
				<div class="hero-item set-bg" data-setbg="img/hero/5.webp">
					<div class="pa-text">
						<h2>Malcolm Lismore Photographer</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- jQuery (replace with latest version) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Other Plugins -->
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<!-- Pana Accordion -->
	<script src="js/pana-accordion.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<script>
		// JavaScript to set the background images using the data-setbg attribute
		$(document).ready(function() {
			$('.set-bg').each(function() {
				var bg = $(this).data('setbg');
				$(this).css('background-image', 'url(' + bg + ')');
			});
		});
	</script>
</body>
</html>
