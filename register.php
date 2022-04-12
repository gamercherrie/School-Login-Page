<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Register User</title>
</head>
<body>
    <div class="content">
        <h1 class="page-header">Register</h1>
        <form action="userRegistration.php" method="post" class="actionPage">
		    <input type="text" name="username" id="" placeholder="Username" class="form-fill"><br>
		    <input type="password" name="password" id="" placeholder="Password" class="form-fill"> <br>
		    <input type="text" name="studentID" id="" placeholder="Student ID" class="form-fill"> <br>
	        <input type="submit" value="Register" class="log-button">
	    </form>
    </div>
</body>
</html>