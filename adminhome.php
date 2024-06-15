<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Photos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/admin.css" />
   
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body>


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
    <h1 class="text-4xl text-white mt-10 mb-10">Admin Options</h1>
    
        <div class="text-center">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-5 py-2.5 text-center me-12 mt-4 mb-8 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Check Orders Received</button>

        
       
        
       
        
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="category">Select category:</label><br><br>
        <select name="category" id="category" required>
            <option value="Landscapes">Landscapes</option>
            <option value="Wildlife">Wildlife</option>
            <option value="CoastalBirds">Coastal Birds</option>
            <option value="Wedding">Wedding</option>
            <option value="Event">Event</option>
        </select><br><br>
        
        <label for="photo">Choose a photo:</label><br><br>
        <input type="file" id="photo" name="photo" accept="image/*"><br><br>
        
        <input type="submit" value="Upload">
    </form>
    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>