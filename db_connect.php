<?php
// Simple and safe database connection
$conn = mysqli_connect("localhost", "root", "", "university_cms");

// Check if connection worked
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>