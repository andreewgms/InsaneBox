<?php

session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recuperar os valores enviados pelo formulário

    $valor = $_POST['valor'];

    $descricao = $_SESSION['colete'];

        

    $id_user = $_SESSION['id'];



    

/* Server connect, profile, passwd, database, */

    $servername = "186.202.152.193";

    $username = "insanebox";

    $password = "KTPVEqGdmiy3f#";

    $dbname = "insanebox";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $pontuacao_doacao = $valor;



    $sql = "INSERT INTO Doacao (colete, valor, pontuacao_doacao, id_usuario) VALUES ('$descricao','$valor', '$pontuacao_doacao', '$id_user')";

    if ($conn->query($sql) === TRUE) {

        echo "Doacao cadastrada com sucesso!";

    } else {

        echo "Erro ao cadastrar doação: " . $conn->error;

    }

    

    $sql = "SELECT pontuacao FROM Usuario WHERE id_usuario = '$id_user'";

    $result_id = mysqli_query($conn,$sql) or die("Erro no database");

    $total = mysqli_num_rows($result_id);

    $old_pontos = 0;

    if($total){

        $dados = mysqli_fetch_array($result_id);

        $_SESSION['pontuacao'] = $dados["pontuacao"];

    }

    /*update da pontuacao

    $old_pontos = $old_pontos + $pontuacao_doacao;

    $sql = "UPDATE Usuario SET pontuacao = '$old_pontos' WHERE id_usuario = $id_user";

    if($conn->query($sql)){

        echo "ponto alterado com sucesso";



    }else{

        echo "Erro ao cadastrar o Nome".$conn->error;



    }



    $conn->close();

    echo "Doação cadastrada com sucesso!";*/

    $conn->close();

    header("Location: processar_login.php");

}else {

    echo "Redirecionar para a página de cadastro se o formulário não foi enviado corretamente";

    header("Location: Doacao.php");

    exit();

}

?>