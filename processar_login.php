<?php
// Efetua a conexão
    require "Connection.php";
//inicia a sessão
    session_start();
// Verificar se o formulário foi enviado
    $Email = isset($_POST['Email']) ? addslashes(trim($_POST['Email'])) : FALSE;
    $senha = isset($_POST['password']) ? md5(trim($_POST['password'])) : FALSE;

// Testa se o usuario forneceu os dados:
    if (!$Email || !$senha) {
        echo("alert('Você deve digitar seu email e sua senha')");
        header("Location: Login.php");
    }
// a partir daqui a magia deve acontecer:::

    $SQL = 'SELECT id_usuario, nome, Colete, senha, tipo_usuario, pontuacao, colocacao, Email, Foto FROM insanebox.Usuario WHERE Email like "'.$Email.'"';
//executa a query de busca:
    $result_id = mysqli_query($conn,$SQL) or die("Erro no database");
    $total = mysqli_num_rows($result_id);

    if($total){
        $dados = mysqli_fetch_array($result_id);

        //comparação da Passwd com a senha cadastrada:
        if (!strcmp($senha, $dados['senha'])) {
            $_SESSION['id'] = $dados["id_usuario"];
            $_SESSION['nome'] = $dados["nome"];
            $_SESSION['colete'] = $dados["Colete"];
            $_SESSION['tipo'] = $dados["tipo_usuario"];
            $_SESSION['pontuacao'] = $dados["pontuacao"];
            $_SESSION['colocacao'] = $dados["colocacao"];
            $_SESSION['email'] = $dados["Email"];
            $_SESSION['foto_perfil'] = $dados["Foto"];
            header("Location: User.php");
        }else {
            echo "Senha invalida";
        }
    }else{
        echo "email not found on database, try <a href='Login.php'>login</a> again and verify you email/password
        ";
    }
    //echo "Usuario logado-: " . $_SESSION['nome'];
    //echo "Email----------: " . $_SESSION['email'];
