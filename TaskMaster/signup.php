<?php
// Check if the 'name' field is set in the form submission
if(isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    // Handle the case when 'name' is not set or empty
    echo "Name field is required.";
    exit(); // Stop further execution
}

// Similarly, check and retrieve other fields like 'email' and 'password'
if(isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "Email field is required.";
    exit();
}

if(isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    echo "Password field is required.";
    exit();
}

// Database connection

$mysqli = require __DIR__ . "/database.php";

$conn = new mysqli('localhost', 'root', '', 'signup_db');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users_info (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    
    // Check if the insertion was successful
    if($stmt->affected_rows > 0) {
        header("Location: TaskMaster-MB.html");
    } else {
        echo "Error registering user.";
    }
    
    $stmt->close();
    $conn->close();
}
?>
