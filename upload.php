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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {
    $category = $_POST['category']; // Get the category from the form
    $target_dir = "uploads/$category/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $filename = basename($_FILES["photo"]["name"]);
            $sql = "INSERT INTO $category (filename) VALUES ('$filename')";

            if ($conn->query($sql) === TRUE) {
                echo "The file " . htmlspecialchars($filename) . " has been uploaded.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
}

$conn->close();
?>
