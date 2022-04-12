<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addToDatabase.css">
    <title>Add Student</title>
</head>
<body>
    <div class="content">
        <h1 class="page-header">Add Student</h1>
        <form action="studentAdmission.php" method="post" class="actionPage">
		    <input type="text" name="firstName" id="" placeholder="First Name" class="form-fill"><br>
		    <input type="text" name="lastName" id="" placeholder="Last Name" class="form-fill"> <br>
		    <input type="text" name="DOB" id="" placeholder="DOB" class="form-fill"> <br>
            <input type="text" name="major" id="" placeholder="Major" class="form-fill"><br>
		    <input type="text" name="GPA" id="" placeholder="GPA" class="form-fill"> <br>
		    <input type="text" name="level" id="" placeholder="Level" class="form-fill"> <br>
	        <input type="submit" value="Add Student" class="log-button">
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