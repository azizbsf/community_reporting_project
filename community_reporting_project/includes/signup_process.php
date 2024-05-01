<?php
// Include the database connection file
include "db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST["signupUsername"];
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];

    // Perform database operations (e.g., insert new user into the database)
    // Example code (you need to adjust according to your database schema):
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Redirect to success page or homepage
        header("Location: templates/home.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
