<?php
    //grab student ID
    $studentID =(int) $_GET['STUDENTID'];
    
    //connect to database
    $connection = mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    // get student information
    $sql = "select * from STUDENT where STUDENTID = $studentID";
    $results = mysqli_query($connection, $sql);
    $studentInfo = mysqli_fetch_all($results);

    echo "<h2>Student ID:", $studentID, "</h2>";
    foreach($studentInfo as $row){
        echo "<h2> Student Name: ", $row[1], " ", $row[2], "</h2>";
        echo "<h2> DOB: ", $row[3], "</h2>";
        echo "<h2> Major: ", $row[4], "</h2>";
        echo "<h2> GPA: ", $row[5], "</h2>";
        echo "<h2> Level: ", $row[6], "</h2>";
    }

?>

<a href="homepage.php">Back to homepage</a>