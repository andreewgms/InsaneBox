<?php
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['nome'] == true){
        header("Location: User.php");      
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Insane Box</title>
        <link rel="icon" type="image/x-icon" href="./TITLE.png">
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="CSS/Stiles.css">
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
                    <a href="./index.php">
					    <img src="TITLE.png" height="70%" width="70%" class="">
                    </a>
				</div>
			</div>
			<div class="row container-fluid d-flex justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <form id="login-form" class="" method="post" action="processar_login.php">
                        <input type="text" id="Email" placeholder="Email" name="Email" class="col-12">
                        <input type="password" id="password" placeholder="Senha" name="password" class="col-12">
                        <button type="submit" class="h1 btn btn-dark col-12">Login</button>
                        <a href="Resetar_senha.php" class="h1 btn btn-light col-md-12">Sou trouxa e esqueci a senha</a>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>
