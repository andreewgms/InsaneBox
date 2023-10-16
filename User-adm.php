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
        <style>
            .dados-usuario {
                width: 100%;
                margin: 0 auto;
                text-align: center;
                border: 2px solid black;
                border-radius: 10px;
                background-color: #555;
            }
            .dados-usuario p{
                text-shadow: -1px -1px 0px #FFF, 
                        -1px 1px 0px #FFF,                    
                            1px -1px 0px #FFF,                  
                            1px 0px 0px #FFF;
            }
            .container{
                height: 176vw;
                width: 99%;
                display: flex;
                align-content: center;
                gap: 15px;
                flex-direction: column;
                justify-content: center;
                
            }
            h1{
                text-shadow: -1px -1px 0px #FFF, 
                        -1px 1px 0px #FFF,                    
                            1px -1px 0px #FFF,                  
                            1px 0px 0px #FFF;
                color: black;
                font-family: Carnevalee Freakshow, sans-serif;
            }
            .form-user{
                width: 100%;
                margin: 0 auto 0;
                text-align: center;
                background-color: transparent;
                
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#home").click(function(){
                    if ($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
	    			}if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if ($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}if ($("#form-contribuicao").is(":visible")) {
	    				$("#form-contribuicao").toggle("slow")
	    			}
                })
            });
            $(document).ready(function(){                
	    		$("#perfil").click(function(){
	    			$("#form-perfil").toggle("slow")                    
                    if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if ($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}if ($("#form-contribuicao").is(":visible")) {
	    				$("#form-contribuicao").toggle("slow")
	    			}
                })});
	    	$(document).ready(function(){
	    		$("#doacao").click(function(){
	    			$("#form-doacao").toggle("slow")
	    			if ($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}if($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
	    			}if ($("#form-contribuicao").is(":visible")) {
	    				$("#form-contribuicao").toggle("slow")
	    			}
	    		})
	    	});
	    	$(document).ready(function(){
	    		$("#projeto").click(function(){
	    			$("#form-projeto").toggle("slow")
	    			if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}if($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
	    			}if ($("#form-contribuicao").is(":visible")) {
	    				$("#form-contribuicao").toggle("slow")
	    			}
	    		})
	    	});
	    	$(document).ready(function(){
	    		$("#participacao").click(function(){
	    			$("#form-participacao").toggle("slow")
	    			if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
	    			}if ($("#form-contribuicao").is(":visible")) {
	    				$("#form-contribuicao").toggle("slow")
	    			}
                    
	    		})
	    	});
            $(document).ready(function(){
	    		$("#contribuicao").click(function(){
	    			$("#form-contribuicao").toggle("slow")
	    			if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}
	    		})
	    	});
	    </script>
    </head>
    <body class="text-center">
        <video autoplay muted loop id="bg-video">
            <source src="VIDEOBK.mp4" type="video/mp4">
        </video>            
        <div class="topnav" id="myTopnav">
            <a href="User.php" id="home" class="active">Home</a> 
            <a href="Perfil.php" id="perfil">Perfil</a>           
            <a href="Contribuicao.php" id="Contribuicao">Visualizar Contribuições</a>
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
        <div class="container">

            
            <div class="dados-usuario">
				<h1>Premio Acumulado:</h1>
				<p>R$ <?php echo $_SESSION['premio'].",00";?></p>
				<img src="<?php echo $_SESSION['foto_perfil']; ?>" alt="Foto do Integrante" class="user-photo">
				<p>
					Bem vindo ~ <?php echo $_SESSION['nome']."<br>";
					 echo "Vulgo ".$_SESSION['colete']." #".$_SESSION['id'];?>
				</p>
				<p>
					Colocacao: <?php echo $_SESSION['colocacao'];?>&ordm;<br>
					// <?php echo $_SESSION['pontuacao']; ?> pontos
				</p>                
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
            

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
	</body>
</html>
