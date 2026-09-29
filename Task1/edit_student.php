<?php

$conn = mysqli_connect("localhost", "root", "", "apexplanet");

if (!$conn) {
    die("Connection failed");
}

$id = $_GET["id"];

$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $sql);

$student = mysqli_fetch_assoc($result);

if (isset($_POST["update"])) {

    $name = $_POST["name"];
    $course = $_POST["course"];
    $year = $_POST["year"];

    $sql = "UPDATE students
            SET name = '$name',
                course = '$course',
                year = '$year'
            WHERE id = $id";

    mysqli_query($conn, $sql);

    header("Location: view_students.php");
    exit();
}

?>

<h2>Edit Student</h2>

<form method="POST">

    Name:
    <input type="text" name="name"
           value="<?php echo $student['name']; ?>" required>

    <br><br>

    Course:
    <input type="text" name="course"
           value="<?php echo $student['course']; ?>" required>

    <br><br>

    Year:
    <input type="number" name="year"
           value="<?php echo $student['year']; ?>" required>

    <br><br>

    <input type="submit" name="update" value="Update Student">

</form>