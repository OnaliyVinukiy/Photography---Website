<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/signin.css">

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
  
</body>
</html>
