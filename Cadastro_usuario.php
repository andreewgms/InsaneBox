<?php
    session_start();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Insane Box - Cadastro de participante</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="CSS/Stiles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-secondary">
                    <!-- iNICIO DO FORMULARIO DE CADASTRO DE USUARIO -->
                    <form action="processar_cadastro.php" method="post" enctype="multipart/form-data" class="row g-3">
                        <div class="col-md-12">
                            <h2 class="text-center text-dark"> Formulario para cadastro de participantes </h2>
                        </div>

                        <!-- Nome -->
                        <div class="form-group col-md-12">
                            <input type="text" placeholder="Nome do Usuário" class="form-control" id="nome" name="nome" required>
                        </div>
                        <!-- Nome do Colete -->
                        <div class="form-group col-md-6">
                            
                            <input type="text" placeholder="Colete" class="form-control" id="colete" name="colete" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group col-md-6">
                            
                            <input type="Email" placeholder="Email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Senha -->
                        <div class="form-group col-md-6">
                            
                            <input type="password" placeholder="Senha" class="form-control" id="senha" name="senha" required>
                        </div>

                        <!-- Tipo Usuario -->
                        <div class="form-group col-md-6">                            
                            <select class="form-control" id="tipo" name="tipo" required>
                                <option value="0" selected disabled>Tipo do Usuário</option>
                                <option value="1">Administrador</option>
                                <option value="2">Diretoria</option>
                                <option value="3">Membro</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="col-md-6">
                                <label for="foto" class="text-dark"><h2>Foto do usuario: </h2></label>
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="foto" accept="image/jpeg" id="foto" required />
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group col-md-6">
                            <button class="btn btn-danger btn-lg btn-block" type="reset"><h2>Cancelar cadastro</h2></button>
                        </div>
                        <div class="form-group col-md-6">
                            <button class="btn btn-dark btn-lg btn-block" type="submit"><h2>Cadastrar Usuario</h2></button>
                        </div>
                        
                    </form>
                </div>

                <div class="col-md-3"></div>
                
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-secondary">
                    <p class="text-center">
                        <h2>InsanE BoX - torne-se parte dessa historia</h2>
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
            


            

            <!--footer>
                <p>
                    JOGO DESTINADO UNICAMENTE PARA INTEGRANTES DO INSANOS MC DIVISAO URUGUAIANA - RS COM O INUITO DE ARRECADAR VALORES PARA O CAIXA O CLUBE
                </p>
            </footer-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
