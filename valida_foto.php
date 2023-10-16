<?php

session_start();

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar os valores enviados pelo formulário
    
    
    $id_user = $_SESSION['id'];

    
/* Server connect, profile, passwd, database, */
    $servername = "186.202.152.193";
    $username = "insanebox";
    $password = "KTPVEqGdmiy3f#";
    $dbname = "insanebox";
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    //testa se o usuario enviou uma foto no formulário:
    if (null != file_get_contents($_FILES['foto']['tmp_name'])){
        $Foto = base64_encode(file_get_contents($_FILES['foto']['tmp_name']));
        $Foto = "data:image/jpg;base64," . $Foto;

        $sql = "UPDATE Usuario SET Foto = '$Foto' WHERE id_usuario = $id_user";
        if($conn->query($sql)){
            echo "Foto Alterada com sucesso";
            $_SESSION['foto_perfil'] = $Foto;
        }else{
            echo "Erro ao cadastrar o Colete".$conn->error;
        }
    }else{
        echo 'nao deu certo a distribuição';
    }

    $conn->close();

    header("Location: Perfil.php");

}else{
    echo "dados inconsistentes";
}