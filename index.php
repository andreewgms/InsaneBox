<?php
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['nome'] == true){
        header("Location: verifica_login.php");      
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="./TITLE.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insane Box - Um mundo INSANO</title>
	<link rel="stylesheet" type="text/css" href="CSS/Stiles.css">
    <!--Comment to push-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body class="text-center">
	<div class="container-fluid d-flex justify-content-center">
		<video autoplay muted loop id="bg-video">
			<source src="VIDEOBK.mp4" type="video/mp4">
		</video>

		<div class="container" style="
            height: 176vw;
            width: 100%;
            display: flex;
            align-content: center;
            gap: 15px;
            flex-direction: column;
            justify-content: center;
        ">
			<div class="row container-fluid d-flex justify-content-center">
				<div class="col-sm-12 col-md-6">
					<img src="TITLE.png" height="70%" width="70%" class="">
				</div>
			</div>
			<div class="row container-fluid d-flex justify-content-center">
                <div class="col-sm-12 col-md-6 " >
                    <a href="Login.php">
                        <img src="BUTTON.png" height="80%" width="80%">
                    </a>
                </div>
			</div>

		</div>

		
	</div>
</body>
<footer class="bg-dark text-light container-fluid fixed-bottom">
    <div class="row">
        <div class="col d-none d-md-block">
            <p style="font-family: Carnevalee Freakshow, sans-serif;text-align: center;">
                Idealizado por <a href="http://instagram.com/james.m.maia" target="_blank">James</a> - ADM da Divisao, desenvolvido por <a href="http://instagram.com/andrewrosseti.dev" target="_blank">Rosseti</a> - Social da Divisao
            </p>
        </div>
        <div class="col d-sm-block text-center">
            <p>
            Jogo destinado unicamente para integrantes do Insanos MC, da divisão de Uruguaiana - RS com o intuito de arrecadar valores para o caixa da divisão
            </p>
        </div>
        <div class="col d-none d-md-block">
            <p style="font-family: Carnevalee Freakshow, sans-serif;text-align: center;">
                    Temporada 0.1
            </p>
        </div>
    </div>

</footer>
</html>