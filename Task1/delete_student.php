<?php

$conn = mysqli_connect("localhost", "root", "", "apexplanet");

if (!$conn) {
    die("Connection failed");
}

$id = $_GET["id"];

$sql = "DELETE FROM students WHERE id = $id";

mysqli_query($conn, $sql);

header("Location: view_students.php");
exit();

?>