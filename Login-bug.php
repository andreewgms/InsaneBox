<?php
    session_start();
    if(isset($_SESSION['id']) && $_SESSION['nome'] == true){
        header("Location: user.php");
      
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="lorem ipsum">
    <meta name="author" content="InsaneBox">
    

    <title>Insane Box - Entrar</title>

    

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-5.3.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
  </head>

    <body class="text-center">
        <video autoplay muted loop id="bg-video">
            <source src="VIDEOBK.mp4" type="video/mp4">
        </video>
        <form action="./processar_login.php" class="form-signin" method="post">
            <img class="mb-4" src="./TITLE.png" width="20%" height="20%" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Please, signin</h1>
            <label for="Email" class="sr-only">Email</label>
            <input type="email" id="Email" class="form-control" placeholder="Email" required="" autofocus="" name="Email">
            <label for="Password" class="sr-only">Senha</label>
            <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
