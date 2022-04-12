<?php
    session_start();
    $studentID = $_SESSION['studentID'];
    $courseID = $_POST['courseID'];

    $connection=  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $loadQuery = "INSERT INTO REGISTRATION(StudentID, CourseID) VALUES ('$studentID', '$courseID');";

    //if loaded successfully go to homepage
    if ($connection->query($loadQuery)) {
        header("Location: homepage.php");
    } 
    else {
       header("Location:registerStudentCourse.php?err=Error enrolling to course");
    }
?>
