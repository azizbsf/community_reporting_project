<?php
// Include the database connection file
include "db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["loginUsername"];
    $password = $_POST["loginPassword"];

    // Perform database operations (e.g., check if user exists and password is correct)
    // Example code (you need to adjust according to your database schema):
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists and password is correct
        // Redirect to success page or homepage
        header("Location: home.php");
        exit();
    } else {
        // Invalid credentials, show error message or redirect to login page with error
        echo "Invalid username or password";
    }

    // Close database connection
    $conn->close();
}
?>
