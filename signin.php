<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/signin.css">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/accordion.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

  <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $valid_username = "user"; 
        $valid_password = "password";
        
        $entered_username = $_POST['user'];
        $entered_password = $_POST['password'];

        if (($entered_username == $valid_username) && $entered_password == $valid_password) {
            $_SESSION['loggedin'] = true;
            header("Location: admin.php");
            exit;
        } else {
            $error = "Invalid username or password. Please try again.";
        }
    } else {
        $error = "Please enter both username and password.";
    }
}
?>
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

<!-- partial:index.partial.php -->
<div id="bg"></div>

<form method="post" action="signin.php">
  <div class="form-field">
    <input type="text" name="user" placeholder=" Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password" placeholder="Password" required/> 
  </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
  
  <?php if(isset($error)) { ?>
    <div class="error"><?php echo $error; ?></div>
  <?php } ?>
</form>

<!-- partial -->
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

</body>
</html>
