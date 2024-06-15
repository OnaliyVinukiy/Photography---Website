<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Malcolm Lismore photographer</title>
	<meta charset="UTF-8">
	<meta name="description" content="malcolm Photography HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/fresco.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
        .gall-item {
            width: 285px; /* 25% width with 20px margin */
            margin: 2px;
            float: left; /* Make them float left */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

        .gall-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .gallery-warp {
            overflow: hidden; }
    </style>
</head>
<body>
	<!-- Page Preloder -->
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
			<a href="index.php" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php" class="active">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="sm-footer">
			<div class="sm-socail">
				<a href="#"><i class="ti-facebook"></i></a>
				<a href="#"><i class="ti-twitter-alt"></i></a>
				<a href="#"><i class="ti-linkedin"></i></a>
				<a href="#"><i class="ti-instagram"></i></a>
			</div>
			
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->

	<!-- Gallery Section end -->
	<section class="gallery-section">
		<div class="gallery-header">
			<h4>Gallery</h4>
			<ul class="gallery-filter">
				<li class="filter all active" data-filter="*">All</li>
				<li class="filter" data-filter=".Landscapes">Landscapes</li>
				<li class="filter" data-filter=".Wildlife">Wildlife</li>
				<li class="filter" data-filter=".CoastalBirds">Coastal Birds</li>
				<li class="filter" data-filter=".Wedding ">Wedding </li>
				<li class="filter" data-filter=".Event">Event</li>
			</ul>
		</div>
        <div class="nice-scroll">
            <div class="gallery-warp">
                <div class="grid-sizer"></div>
                <!-- Example gallery items -->
                <div class="gall-item Landscapes">
                    <a class="fresco" href="img/gallery/1l.jpg" data-fresco-group="projects">
                        <img src="img/gallery/1l.jpg" alt="">
                    </a>
                    <div class="gi-hover">
                    </div>
                </div>
                <div class="gall-item Wildlife">
                    <a class="fresco" href="img/gallery/w1.jpg" data-fresco-group="projects">
                        <img src="img/gallery/w1.jpg" alt="">
                    </a>
                    <div class="gi-hover">
                    </div>
                </div>
                <div class="gall-item Wildlife">
                    <a class="fresco" href="img/gallery/w1.jpg" data-fresco-group="projects">
                        <img src="img/gallery/w1.jpg" alt="">
                    </a>
                    <div class="gi-hover">
                    </div>
                </div>
                <div class="gall-item Wildlife">
                    <a class="fresco" href="img/gallery/w1.jpg" data-fresco-group="projects">
                        <img src="img/gallery/w1.jpg" alt="">
                    </a>
                    <div class="gi-hover">
                    </div>
                </div>
                <div class="gall-item Wildlife">
                    <a class="fresco" href="img/gallery/w1.jpg" data-fresco-group="projects">
                        <img src="img/gallery/w1.jpg" alt="">
                    </a>
                    <div class="gi-hover">
                    </div>
                </div>
                <!-- Add more gallery items here -->
            </div>
        </div>
    </section>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/pana-accordion.js"></script>
	<script src="js/fresco.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>