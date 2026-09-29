<?php

$conn = mysqli_connect("localhost", "root", "", "apexplanet");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully!";

?>