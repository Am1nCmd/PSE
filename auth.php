<?php
    session_start();
    include 'cn.php';
    // To check if session is started.
	if(isset($_SESSION["email"])){
		$fullname 	= $_SESSION['fullname']; 
		$email		= $_SESSION['email'];
		$type_user	= $_SESSION['type_user'];
	} else {
		$fullname 	= '';
		$email		= '';
		$type_user	= '';
		header("Location:logout");
	}
?>