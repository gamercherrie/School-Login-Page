<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginStyle.css">
    <title>Log in!</title>  
</head>
<body>

<?php
    session_start();

    if(isset($_SESSION['$username'])){
        header("Location:homepage.php?successful");
    }
?>
    <div class="content">
        <h1 class="page-header">Sign in</h1>
        <form class="actionPage" action="login.php" method="post">
            <input type="text" name="username" class="form-fill" placeholder="Username"><br>
            <input type="password" name="password" class="form-fill" placeholder="Password"> <br>
		<input type="submit" value="Log in" class="log-button">
        <a href="register.php">Register</a>
	</form>
    </div>

    <?php
    if(isset($_GET['err'])){
        echo '<br><p class="errorMsg" style="color: red;">',$_GET['err'],'</p>';
    }
    ?>
    
</body>
</html>