<?php

    $DepartmentID = $_POST['DepartmentID'];
    $departmentName = $_POST['Name'];
    $departmentChairName = $_POST['ChairName'];

    $connection=  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $loadQuery = "INSERT INTO DEPARTMENT(DepartmentID, Name, ChairName) VALUES ('$DepartmentID', '$departmentName', '$departmentChairName')";

    //if loaded successfully go to homepage
    if ($connection->query($loadQuery)) {
        header("Location: homepage.php");
    } else {
        header("Location:addDepartment.php?err=Error adding department");
    }
?>
