<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addToDatabase.css">
    <title>Add Department</title>
</head>
<body>
    <div class="content">
        <h1 class="page-header">Add Department</h1>
        <form action="departmentAdmission.php" method="post" class="actionPage">
		    <input type="text" name="DepartmentID" id="" placeholder="DepartmentID" class="form-fill"><br>
		    <input type="text" name="Name" id="" placeholder="Department Name" class="form-fill"> <br>
		    <input type="text" name="ChairName" id="" placeholder="Department Chair Name" class="form-fill"> <br>
	        <input type="submit" value="Add Department" class="log-button">
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