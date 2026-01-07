<?php
// Simple database connection - easy to understand
$conn = mysqli_connect("localhost", "root", "", "university_cms");

// If connection fails, show error (helps debugging)
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>