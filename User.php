<?php
	require "verifica_login.php";
	session_start();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Meu Perfil <?php echo $_SESSION['nome'];?></title>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="CSS/User.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	    <script type="text/javascript">
            $(document).ready(function(){
	    		$("#perfil").click(function(){
	    			$("#form-perfil").toggle("slow")
                    if ($("#form-doacao").is(":visible")) {
	    				$("#form-doacao").toggle("slow")
	    			}if ($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}
	    		})
	    	});
	    	$(document).ready(function(){
	    		$("#doacao").click(function(){
	    			$("#form-doacao").toggle("slow")
	    			if ($("#form-projeto").is(":visible")) {
	    				$("#form-projeto").toggle("slow")
	    			}if($("#form-participacao").is(":visible")) {
	    				$("#form-participacao").toggle("slow")
	    			}if($("#form-perfil").is(":visible")) {
	    				$("#form-perfil").toggle("slow")
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
	    			}
	    		})
	    	});
	    </script>

	</head>

	<body>
		<audio src="BG.mp3" autoplay loop></audio>
		<video src="VIDEOBK.mp4" class="video" autoplay loop muted></video>

		<div class="container">
			<div class="dados-usuario">
				<h1>Premio Acumulado:</h1>
				<p>R$ 545,02</p>
				<img src="<?php echo $_SESSION['foto_perfil']; ?>" alt="Foto do Integrante" class="user-photo">
				<p class="name">
					Bem vindo <?php echo $_SESSION['nome']."<br>";
					 echo "Vulgo ".$_SESSION['colete']." #".$_SESSION['id'];?>
				</p>
				<p class="points">
					Colocacao: <?php echo $_SESSION['colocacao'];?>&ordm;<br>
					<?php echo $_SESSION['pontuacao']; ?> pontos
				</p>
				<div style="margin-top: 20px;" class="menu">
                    <a href="#" class="button" id="perfil">Meu perfil</a>
					<a href="#" class="button" id="doacao">Doacao</a>
					<a href="#" class="button" id="projeto">Projeto</a>
					<a href="#" class="button" id="participacao">Participacao</a>
					<a href="#" class="button" id="meus-dados">Vizualizar contribuicoes</a>
					<a href="Logout.php" class="button">Encerrar sessao</a>
				</div>
			</div>

            <div id="form-perfil" hidden><!-- <div class="row"> -->
				<form method="post" action="valida_perfil.php" method="post" enctype="multipart/form-data">
					<br>
					<label for="nome">Nome do integrante</label>
					<input type="text" name="nome" value="<?php echo $_SESSION['nome']?>" required><br>
					<label for="colete">Nome do colete:</label>
					<input type="text" name="colete" value="<?php echo $_SESSION['colete']?>" required><br>
					<label for="email" hidden>Email cadastrado:</label>
					<input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"required disabled><br>
                    <label for="foto">Alterar foto de perfil</label>
                    <input type="file" name="foto" accept="image/jpeg" id="foto" /><br>
					<button type="submit" name="" class="button" value="Salvar">Salvar</button><br><br>
				</form>
			</div>
			<div id="form-doacao" hidden><!-- <div class="row"> -->
				<form method="post" action="valida_doacao.php">
					<br>
					<label for="Descricao">Descreva o motivo da doacao</label>
					<input type="textarea" name="Descricao" required><br>
					<label for="valor">Informe o valor da doacao:</label>
					<input type="number" name="valor" min="10" max="1000" step="0.10" required><br>
					<label for="id_usuario" hidden>Neste campo vai seu ID de usuario, utilizado para validar a doação:</label>
					<input type="number" name="id_usuario" value="<?php echo $_SESSION['id']; ?>"required disabled hidden>
					<button type="submit" name="" class="button" value="Enviar Doacao">Enviar Doacao</button><br><br>
				</form>
			</div>
			<div id="form-projeto" hidden><!-- <div class="row"> -->
				<form method="post" action="valida_projeto.php">
					<br>
					<label for="Descricao">Descreva o nome do projeto</label>
					<input type="textarea" name="Descricao" required><br>
					<label for="valor">Informe o valor estimado a arrecadar:</label>
					<input type="number" name="valor_estimado" min="10" max="10000" step="0.10" required><br>
					<label for="id_usuario" hidden>ID de usuario, utilizado para validar o projeto:</label>
					<input type="number" name="id_usuario" value="<?php echo $_SESSION['id']; ?>"required disabled hidden>
					<label for="participacao">Informe o ID dos outros participantes, separados por virgula</label>
					<input type="text" name="participacao" placeholder="Deixe em branco se nao houver"><br>
					<button type="submit" name="" class="button" value="Enviar Doacao">Enviar Projeto</button><br><br>
				</form>
			</div>
			<div id="form-participacao" hidden><!-- <div class="row"> -->
				<form method="post" action="valida_participacao.php">
					<br>
					<label for="id_projeto">Informe o ID do Projeto</label>
					<input type="number" name="id_projeto" required><br>
					<label for="id_usuario">ID de usuario, preenchido automaticamente:</label>
					<input type="number" name="id_usuario" value="<?php echo $_SESSION['id']; ?>"required disabled><br>
					<button type="submit" name="" class="button" value="">Registrar participacao</button><br><br>
				</form>
			</div>
		</div>
	</body>
</html>
