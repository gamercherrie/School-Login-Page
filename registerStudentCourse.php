<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addToDatabase.css">
    <title>Enroll Course</title>
</head>
<body>
    <?php
    //get the departments
    $connection =  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $sql =  "Select * from COURSE ";
    $result = mysqli_query($connection, $sql);
    $department = mysqli_fetch_all($result);

    $sql =  "Select STUDENTID from STUDENT";
    $result = mysqli_query($connection, $sql);
    $studentIDInfo = mysqli_fetch_all($result);

    ?>
    <div class="content">
        <h1 class="page-header" style ="margin-left: 12rem;">Enroll Course</h1>

        <form action="registerCourse.php" method="post" class="actionPage" style="margin-top: 10rem;">
            <div class="select" style="margin-left: 2rem;">
                <select name="courseID" id="">
                <option value="">Select Course</option>
                <?php
                foreach($department as $row)
                {
                    echo '<option value="',$row[0],'">',$row[1],'</option>';
                }
                ?>
                
                </select>
            </div>
	        <input type="submit" value="Enroll Course" class="log-button" style="margin-left: 5rem;">
	    </form>
            <h3 style="font-family:'Roboto Mono', monospace; margin-left: 15rem; margin-top: 6em;"><a href="homepage.php" style="color:white;"> Back To Homepage </a></h3>
        <?php
            if(isset($_GET['err'])){
                echo '<p class="errorMsg" style="color: red;">',$_GET['err'],'</p>';
            }
    ?>
    </div>
</body>
</html>