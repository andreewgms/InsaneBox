<?php
	session_start();

	if(!isset($_SESSION['id']) || !isset($_SESSION['nome'])){
		header("Location: Login.php");
		exit();
		
	}
?>