<?php
	session_start();

    $email = $_POST['Email'];
    $colete = $_POST['colete'];
    $senha = $_POST['Senha'];
    $senha_comp = $_POST['Senha1'];

    if($senha == $senha_comp){
        $senha = md5($senha);

        $servername = "186.202.152.193";
        $username = "insanebox";
        $password = "KTPVEqGdmiy3f#";
        $dbname = "insanebox";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "UPDATE Usuario SET senha = '$senha' WHERE Email = '$email' AND Colete = '$colete'";
        if($conn->query($sql)){
            echo "Password changed successfully!";
        }else{
            echo "there's something wrong";
        }

    }else{
        echo "The digited passwords not match, please return at last page and fix it. For geeks comparation: label 1 ". $senha ." Label 2 " . $senha_comp;
    }

?>