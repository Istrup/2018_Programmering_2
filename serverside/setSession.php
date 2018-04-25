<?php
	session_start();
	$_SESSION["loggedin"] = true;
	header('Location: ' . $_SESSION["redirurl"] . '');
?>