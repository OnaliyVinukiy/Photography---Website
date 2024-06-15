<?php
$servername = "localhost";
$username = "root"; // Update with your database username
$password = "avi"; // Update with your database password
$dbname = "photography";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $date_time = $_POST['date_time'];
    $location = $_POST['location'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_submissions (email, contact_number, date_time, location) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $email, $contact_number, $date_time, $location);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
