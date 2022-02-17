<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faça o Login</title>

	<link rel="stylesheet" type="text/css" href="../public/css/style-login.css">

</head>
<body>
	<div class="logo">
		<img src="../public/img/logo.png">
	</div>
	<div id="container">
		<p>Faça o Login</p>
		<form action="../models/valida_login.php?action=autenticar" method="post">
			<div class="div-inputs">
				<div>
					<label for="email">Entrar: </label>
				</div>
				<div>
					<input placeholder=" Digite seu e-mail" type="email" name="email">
				</div>
			</div>

			<div class="div-inputs">
				<div>
					<label for="password">Senha: </label>
				</div>
				<div>
					<input placeholder=" Digite sua senha" type="password" name="password">
				</div>
				<?php 
					if(isset($_GET['autentication']) && $_GET['autentication'] == 'notAut'){
				?>

					<div style="color: red; margin-top: 10px; margin-bottom: -20px;">Email ou Senha incorreto</div>

				<?php 
					}
				?>

				<?php 
					if(isset($_GET['autentication']) && $_GET['autentication'] == 'created'){
				?>

					<div style="color: green; margin-top: 10px; margin-bottom: -20px;">Conta criada com sucesso</div>

				<?php 
					}
				?>
			</div>

			<div class="div-inputs">
				<button type="submit">
					Entrar
				</button>
			</div>
		</form>

		<div class="div-info">
			<a href="">Esqueceu a Senha?</a>
		</div>
		<div style="margin-bottom: 15px;" class="div-info">
			Ainda não possui conta? <a href="cadastro.php">Cadastre-se</a>
		</div>

	</div>

</body>
</html>