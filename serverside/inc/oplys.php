<?php
	session_start();

	if($_SESSION["loggedin"] != true){
		$_SESSION["redirurl"] = $_SERVER[REQUEST_URI];
		header('Location: login.php'); 
	} 
?>