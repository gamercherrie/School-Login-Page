<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addToDatabase.css">
    <title>Add Course</title>
</head>
<body>
    <?php
    //get the departments
    $connection =  mysqli_connect('localhost', 'admin', 'adminpassword123', 'TESTCODE');

    $sql =  "Select * from DEPARTMENT ";
    $result = mysqli_query($connection, $sql);
    $department = mysqli_fetch_all($result);
    
    ?>
    <div class="content">
        <h1 class="page-header">Add Course</h1>

        <form action="courseAdmission.php" method="post" class="actionPage">
		    <input type="text" name="CourseID" id="" placeholder="Course ID" class="form-fill"><br>
		    <input type="text" name="courseName" id="" placeholder="Course Name" class="form-fill"> <br>
            <div class="select">
                <select name="DepartmentID" id="">
                <option value="">Select Department</option>

                <?php
                foreach($department as $row)
                {
                    echo '<option value="',$row[0],'">',$row[1],'</option>';
                }
                ?>
                
                </select>
            </div>
	        <input type="submit" value="Add Course" class="log-button">
            <h3 style="font-family:'Roboto Mono', monospace; margin-left: 5rem; margin-top: 6em;"><a href="homepage.php" style="color:white;"> Back To Homepage </a></h3>
	    </form>

        <?php
            if(isset($_GET['err'])){
                echo '<p class="errorMsg" style="color: red;">',$_GET['err'],'</p>';
            }
    ?>
    </div>
</body>
</html>