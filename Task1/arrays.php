<?php

// Indexed Array
$skills = array("Java", "Python", "HTML", "CSS");

echo "<h2>My Skills</h2>";

foreach ($skills as $skill) {
    echo $skill . "<br>";
}


// Associative Array
$student = array(
    "name" => "Athul K K",
    "course" => "Computer Science Engineering",
    "year" => "3rd Year"
);

echo "<h2>Student Details</h2>";

echo "Name: " . $student["name"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
echo "Year: " . $student["year"] . "<br>";

?>