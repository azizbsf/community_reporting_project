<?php
// Include the database connection file
include "db.php";

// Fetch recent incidents from the database
$sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 10";
$result = $conn->query($sql);

// Display recent incidents
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='incident'>";
        echo "<h3>" . $row["title"] . "</h3>";
        echo "<p>" . $row["content"] . "</p>";
        if (!empty($row["image_url"])) {
            echo "<img src='" . $row["image_url"] . "' alt='Incident Image'>";
        }
        echo "</div>";
    }
} else {
    echo "No recent incidents found.";
}

// Close database connection
$conn->close();
?>
