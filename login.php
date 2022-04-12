<?php

    //connect to the database
    $connect = mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    //collect form login data 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryData = "SELECT * FROM USERS WHERE username ='$username'";

    //store in the result of query
    $result = mysqli_query($connect, $queryData);
    //fetch all results
    $dataArray = mysqli_fetch_all($result);

    if(sizeof($dataArray) > 0) 
    {
        //user was found 
            foreach($dataArray as $row)
            {
                if($row[0] == $username && $row[1] == $password)
                {
                    //proceed
                    //echo "Username: ",$row[0] ,"Password : ". $row[1], "Type: ", $row[2], "STUDENTID: ", $row[3]; 
                    
                    //create session
                    session_start();
                    //save the info to the session
                    $_SESSION['username'] = $row[0];
                    $_SESSION['userType'] = $row[2];
                    $_SESSION['studentID'] = $row[3];
        
                    //redirect to homepage			
                    header("Location:homepage.php");
        
                } else {
                        //error
                        header("Location:index.php?err=Incorrect-credentials");
                }
            }
    }
?>