<?php
    //require "verifica_login.php";
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Resetar a senha do vacilão</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="p-3 m-0 border-0 bd-example m-0 border-0">
        <!--video autoplay muted loop id="bg-video">
            <source src="VIDEOBK.mp4" type="video/mp4">
        </video>

        <a href="index.php"><img id="title-img" src="TITLE.png"></a-->
        <form action="valida_senha.php" method="post">
            <div class="row">
                <div class="col-md-12 mb-3 form-group">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp">
     
     
                    <div id="emailHelp" class="form-text">Email deve ser idêntico ao cadastrado pelo ADM</div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="Colete" class="form-label">Colete</label>
                    <input type="text" class="form-control" id="Colete" name="colete" aria-describedby="coleteHelp">
                    <div id="coleteHelp" class="form-text">Nome do path do seu colete</div>
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="Senha" class="form-label">Insira aqui a senha</label>
                    <input type="password" class="form-control" id="Senha" name="Senha">
                </div>
                <div class="col-md-12 mb-3 form-group">
                    <label for="Senha1" class="form-label">Repita a senha</label>
                    <input type="password" class="form-control" id="Senha1" name="Senha1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </body>

</html>
