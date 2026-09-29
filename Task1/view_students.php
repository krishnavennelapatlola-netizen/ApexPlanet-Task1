<?php

$conn = mysqli_connect("localhost", "root", "", "apexplanet");

if (!$conn) {
    die("Connection failed");
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<h2>Student List</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Year</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["course"]; ?></td>
            <td><?php echo $row["year"]; ?></td>

            <td>
                <a href="edit_student.php?id=<?php echo $row["id"]; ?>">
                    Edit
                </a>

                |

                <a href="delete_student.php?id=<?php echo $row["id"]; ?>">
                    Delete
                </a>
            </td>
        </tr>

    <?php } ?>

</table>