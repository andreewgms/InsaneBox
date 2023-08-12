<?php
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['nome'] == true){
        header("Location: user.php");      
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login - Insane Box</title>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" href="CSS/Stiles.css">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <video autoplay muted loop id="bg-video">
                <source src="VIDEOBK.mp4" type="video/mp4">
            </video>
            <div class="row">
                <div class="col-sm col-md">
                    <a href="index.php"><img id="title-img" src="TITLE.png"></a>
                </div>  
            </div>
            <form id="login-form" class="row" method="post" action="processar_login.php">
                <input type="text" id="Email" placeholder="Email" name="Email" class="col-md-6">
                <input type="password" id="password" placeholder="Senha" name="password" class="col-md-6">
                <button type="submit" class="h1 btn btn-dark col-xs-4 col-sm-4 col-md-4">Login</button>
                <a href="Resetar_senha.php" class="h1 btn btn-light col-xs-4 col-sm-4 col-md-4">Sou trouxa e esqueci a senha</a>
                <br>
            </form>
            <br>
        </div>
    </body>
</html>
