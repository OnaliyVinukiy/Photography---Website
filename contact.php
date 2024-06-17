<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>malcolm | Photography </title>
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
	
	<style>

		form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
			margin-left: 200px;
			margin-right: 200px;
			margin-top: 50px;
        }
		label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
			width: 150px;
        }
        input[type="submit"]:hover {
            background: #218838;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
		.site-footer {
            background-color: #26272b;
            padding: 20px 0 10px; /* Decreased padding to reduce height */
            font-size: 15px;
            line-height: 24px;
            color: #fff; /* Changed font color to white */
        }
        .site-footer hr {
            border-top-color: #bbb;
            opacity: 0.5;
        }
        .site-footer hr.small {
            margin: 20px 0;
        }
        .site-footer h6 {
            color: #fff; /* Ensure headings are also white */
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px;
        }
        .site-footer a {
            color: #fff; /* Changed link color to white */
        }
        .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        }
        .footer-links {
            padding-left: 0;
            list-style: none;
        }
        .footer-links li {
            display: block;
        }
        .footer-links a {
            color: #fff; /* Changed link color to white */
        }
        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover {
            color: #3366cc;
            text-decoration: none;
        }
        .footer-links.inline li {
            display: inline-block;
        }
        .site-footer .social-icons {
            text-align: right;
        }
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

	<!-- Offcanvas Menu Section end -->

	<!-- Contact Section end -->
	<div class="contact-section">
		
	<form action="contact_us.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact_number">Contact Number:</label>
        <input type="tel" id="contact_number" name="contact_number" pattern="[0-9]{10}" required>

        <label for="date_time">Preferred Contact Date & Time:</label>
        <input type="datetime-local" id="date_time" name="date_time" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
		<br><br>
        <input type="submit" value="Submit">
    </form>


	<br><br><br><br>
   
	<!-- Contact Section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/pana-accordion.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
</html>
