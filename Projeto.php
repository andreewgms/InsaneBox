<?php
	require "verifica_login.php";
	session_start();
    $colete = $_SESSION['colete'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Meu Perfil <?php echo $_SESSION['nome'];?></title>
		<meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="./TITLE.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="CSS/User.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        
    </head>
    <body class="text-center">
        <div class="container-fluid">
            <video autoplay muted loop id="bg-video">
                <source src="VIDEOBK.mp4" type="video/mp4">
            </video>    
        </div>        
        <div class="topnav" id="myTopnav">
            <a href="Projeto.php" id="projeto" class="active">Projeto</a>
            <a href="User.php" id="home">Home</a>
            <a href="Perfil.php" id="perfil">Perfil</a>            
            <a href="Contribuicoes.php" id="Contribuicao">Visualizar Contribuições</a>
            <div class="dropdown">
                <button class="dropbtn">Cadastrar 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Doacao.php" id="doacao">Doação</a>
                    <a href="Projeto.php" id="projeto">Projeto</a>
                    <a href="Participacao.php" id="participacao">Participação</a>
                </div>
            </div> 
            <a href="./Logout.php">Sair</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <div class="container" style="
            height: 176vw;
            width: 100%;
            display: flex;
            align-content: center;
            gap: 15px;
            flex-direction: column;
            justify-content: center;
        ">
            <div class="col col-md-12 bg-dark text-center" style="color: White;">
                <div class="row">
                    <h1>Premio Acumulado:</h1>
                    <p>R$ 545,02</p>
                    <!--img src="<?php echo $_SESSION['foto_perfil']; ?>" alt="Foto do Integrante" style="
                        border-radius: 50%;
                        width: 150px;
                        height: 150px;
                        margin-top: 20px;
                        display: block;
                        position: center;
                    " class="img-fluid"-->
                    <img src="<?php echo $_SESSION['foto_perfil']; ?>" style="border-radius: 50%; width: 150px; height: 150px; margin-top: 20px; display: block; position: center;" class="rounded mx-auto d-block" alt="Foto do Integrante">
                    <p style="color: White;">
                        Bem vindo ~ <?php echo $_SESSION['nome']."<br>";
                        echo "Vulgo ".$_SESSION['colete']." #".$_SESSION['id'];?>
                    </p>
                    <p>
                        Colocacao: <?php echo $_SESSION['colocacao'];?>&ordm;<br>
                        <?php echo $_SESSION['pontuacao']; ?> pontos
                    </p>
                </div>

                <div id="form-doacao" class="form-user" ><!-- <div class="row"> -->
                    <form method="post" action="#"><!-- valida_doacao.php -->
                        <div class="row">
                            <h1>CadastrO de ProjetO</h1>
                        </div>
                        <div class="row">
                            <label for="Descricao" class="col-3"><p>Nome:</p></label>
                            <input type="textarea" id="Descricao" class="col-8" name="Descricao" placeholder="Informe o nome do projeto" required>
                        </div>
                        <div class="row">
                            <label for="Valor" class="col-3"><p>R$ arrecadado:</p></label>
                            <input type="Number" id="Valor" class="col-8" name="Valor" placeholder="Informe o valor arrecadado" required>
                        </div>
                        <div class="row">
                            <label for="id_usuario" class="col-3">ID do Usuario:</label>
                            <input type="number" name="id_usuario" value="<?php echo $_SESSION['id']; ?>"required disabled class="col-8">
                        </div>
                        <div class="row">
                            <label for="Ajudante" class="col-3"><p>Ajudante:</p></label>
                            <input type="textarea" id="Ajudante" class="col-8" name="Descricao" placeholder="Informe a ID de ajudantes (se houver)">
                        </div>
                        <button type="submit" name="" class="btn btn-primary col-4 col-sm-6" value="Enviar Doacao" onclick="validadoacao()" >Confirmar</button><a href="User.php" class="btn btn-danger col-4 col-sm-6">Retornar</a>
                    </form>

                </div>
            </div>
        </div>
        <script>
            function validadoacao(){
                alert("Projeto cadastrado com sucesso!");
            }
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>