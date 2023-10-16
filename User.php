<?php
	require "verifica_login.php";
	session_start();
    $tipo = $_SESSION['tipo'];
    echo $tipo;
    if($tipo == 1){
        header("Location: User-adm.php");
    }elseif ($tipo == 2) {
        header("Location: User-dir.php");
    }elseif ($tipo == 3) {
        header("Location: User-mem.php");
    }else{
        echo "No one type are confirmed, please verify and try again";
    }
?>
