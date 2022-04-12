<?php

    $courseID = $_POST['CourseID'];
    $courseName = $_POST['courseName'];
    $DepartmentID = $_POST['DepartmentID'];

    $connection=  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $loadQuery = "INSERT INTO COURSE VALUES ('$courseID', '$courseName', '$DepartmentID')";

    //if loaded successfully go to homepage
    if ($connection->query($loadQuery)) {
        header("Location: homepage.php");
    } else {
        header("Location:addCourse.php?err=Error adding course");
    }
?>
