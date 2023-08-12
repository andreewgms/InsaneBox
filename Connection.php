<?php
	$servername = "186.202.152.193";
	$username = "insanebox";
	$password = "KTPVEqGdmiy3f#";
	$dbname = "insanebox";


	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Verificar a conexão
	if (!$conn) {
	    die("Falha na conexão: " . mysqli_connect_error());
	}
?>