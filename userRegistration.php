<?php
    //get the data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $studentID = $_POST['studentID'];

    //connect to the database
    $connect = mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $queryData = "INSERT INTO USERS VALUES ('$username', '$password', 'USER', '$studentID')";

    if($connect->query($queryData)){
        session_start();
        //save the user info
        $_SESSION['username'] = $username;
		$_SESSION['userType'] = 'USER';
		$_SESSION['studentID'] = $studentID;

		header("Location:homepage.php");
	} 
    else
    {
		echo $conn->error;
		header("Location: index.php");
	}

	
?>


?>