<?php

session_start();

if(isset($_SESSION['id']) && $_SESSION['nome'] == true){
    header("Location: User.php");
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $colete = $_POST['colete'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];
    $Email = $_POST['email'];
    $Foto = file_get_contents(
        $_FILES['foto']['tmp_name']
    );

    //Faz a validação do tipo do usuário:
    if ($tipo == 0) {
        echo "alert('Tipo de usuario não selecionado')";
        header("Location: Cadastro_usuario.html");
    }

    // encripta a senha
    $senha = md5($senha);
    // Encripta a imagem em base64_decode
    $Foto = base64_encode($Foto);
    $Foto = "data:image/jpg;base64," . $Foto;
    // Realizar validações necessárias, como verificar se o nome e a senha foram preenchidos

    // Realizar o processamento do cadastro, como inserir os dados no banco de dados

    // Exemplo de inserção dos dados em um banco de dados (requer uma conexão com o banco de dados estabelecida)
    $servername = "186.202.152.193";
    $username = "insanebox";
    $password = "KTPVEqGdmiy3f#";
    $dbname = "insanebox";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "INSERT INTO Usuario (nome, Colete, senha, tipo_usuario, Email, Foto) VALUES ('$nome','$colete', '$senha', '$tipo', '$Email', '$Foto')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
    $conn->close();

    // Exibir mensagem de sucesso ou erro após o processamento
    echo "Usuário cadastrado com sucesso!";
    //header("Location: Login.php");
} else {
    // Redirecionar para a página de cadastro se o formulário não foi enviado corretamente
    //header("Location: Cadastro_usuario.php");
    exit();
}
