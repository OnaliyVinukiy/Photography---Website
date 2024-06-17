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
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- Page Preloder -->
    

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

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="gallery-header">
            <h4>Gallery</h4>
            <ul class="gallery-filter">
                <li class="filter all active" data-filter="*">All</li>
                <li class="filter" data-filter=".Landscapes">Landscapes</li>
                <li class="filter" data-filter=".Wildlife">Wildlife</li>
                <li class="filter" data-filter=".CoastalBirds">Coastal Birds</li>
                <li class="filter" data-filter=".Wedding">Wedding</li>
                <li class="filter" data-filter=".Event">Event</li>
            </ul>
        </div>
        <div class="nice-scroll">
            <div class="gallery-warp">
                <div class="grid-sizer"></div>

                <?php
                $servername = "localhost";
                $username = "root";  // Update with your database username
                $password = "avi";  // Update with your database password
                $dbname = "photography";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $categories = ['Landscapes', 'Wildlife', 'CoastalBirds', 'Wedding', 'Event'];

                foreach ($categories as $category) {
                    $sql = "SELECT filename FROM $category";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='gall-item $category'>";
                            echo "<a class='fresco' href='uploads/$category/" . $row["filename"] . "' data-fresco-group='projects'>";
                            echo "<img src='uploads/$category/" . $row["filename"] . "' alt=''>";
                            echo "</a>";
                            echo "<div class='gi-hover'></div>";
                            echo "</div>";
                        }
                    }
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <!-- Gallery Section end -->

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
