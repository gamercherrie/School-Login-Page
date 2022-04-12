<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $DOB = $_POST['DOB'];
    $major = $_POST['major'];
    $GPA = $_POST['GPA'];
    $level = $_POST['level'];

    $connection=  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $loadQuery = "INSERT INTO STUDENT(FirstName, LastName, DOB, Major, GPA, LEVEL) VALUES ('$firstName', '$lastName', '$DOB', '$major', '$GPA', '$level')";

    //if loaded successfully go to homepage
    if ($connection->query($loadQuery)) {
        header("Location: homepage.php");
    } else {
        header("Location:addStudent.php?err=Error adding student");
    }
?>
