<?php
	//get the session
	session_start();
	
	//destroy the session
	session_destroy();

	//redirect
	header("Location:index.php");


?>