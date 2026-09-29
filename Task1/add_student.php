<?php

$conn = mysqli_connect("localhost", "root", "", "apexplanet");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $course = $_POST["course"];
    $year = $_POST["year"];

    $sql = "INSERT INTO students (name, course, year)
            VALUES ('$name', '$course', '$year')";

    mysqli_query($conn, $sql);

    echo "Student added successfully!";
}

?>

<h2>Add Student</h2>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    Year:
    <input type="number" name="year" required>
    <br><br>

    <input type="submit" name="submit" value="Add Student">

</form>