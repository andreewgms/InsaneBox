<?php



session_start();


// Verificar se o formulário foi enviado

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recuperar os valores enviados pelo formulário

    $nome = $_POST['nome'];

    $colete = $_POST['colete'];

    $Email = $_SESSION['email'];

    

    $id_user = $_SESSION['id'];



    

/* Server connect, profile, passwd, database, */

    $servername = "186.202.152.193";

    $username = "insanebox";

    $password = "KTPVEqGdmiy3f#";

    $dbname = "insanebox";

    $conn = new mysqli($servername, $username, $password, $dbname);



    $sql = "UPDATE Usuario SET nome = '$nome' WHERE id_usuario = $id_user";

    if($conn->query($sql)){

        echo "Nome alterado com sucesso";

        $_SESSION['nome'] = $nome;



    }else{

        echo "Erro ao cadastrar o Nome".$conn->error;



    }

    $sql = "UPDATE Usuario SET Colete = '$colete' WHERE id_usuario = $id_user";

    if($conn->query($sql)){

        echo "Colete Alterado com sucesso";

        $_SESSION['colete'] = $colete;

    }else{

        echo "Erro ao cadastrar o Colete".$conn->error;

    }

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



    header("Location: User.php");



}else{

    echo "dados inconsistentes";

}