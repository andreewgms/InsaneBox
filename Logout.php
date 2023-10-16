<?php
	require "verifica_login.php";
	session_start();
	session_destroy();
	header("Location: index.php");