<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Faça o Cadastro</title>

		<link rel="stylesheet" type="text/css" href="../public/css/style-cadastro.css">

		<script type="text/javascript">
			
			function verificaSenhas() {

				var senha1 = document.getElementById('senha1');
				var senha2 = document.getElementById('senha2');
				var form = document.getElementById('form');
				var incorrectPass = document.getElementById('incorrect-pass');

				if(senha1.value != '' && senha2.value != '' && senha1.value == senha2.value) {
					form.submit();
				} else {
					incorrectPass.style = 'display: inline-block; color: red;';
				}

			}

		</script>

	</head>
	<body>

		<div class="logo">
			<img src="../public/img/logo.png">
		</div>

		<div id="container">
			<p>Faça o Cadastro</p>
			<form id="form" action="../models/valida_login.php?action=cadastrar" method="post">
				<div class="div-inputs">
					<div>
						<label for="name">Nome: </label>
					</div>
					<div>
						<input placeholder=" Digite seu nome" required type="text" name="name">
					</div>
				</div>

				<div class="div-inputs">
					<div>
						<label for="email">Email: </label>
					</div>
					<div>
						<input placeholder=" Digite seu e-mail" required type="email" name="email">
					</div>
				</div>

				<div class="div-inputs">
					<div>
						<label for="password">Senha: </label>
					</div>
					<div>
						<input placeholder=" Digite sua senha" required id="senha1" type="password" name="password">
					</div>
				</div>

				<div class="div-inputs">
					<div>
						<label for="repeat-pass">Repita a Senha: </label>
					</div>
					<div>
						<input placeholder=" Digite novamente sua senha" required id="senha2" type="password" name="repeat-pass">
					</div>
				</div>
				<div style="color: red; display: none;" id="incorrect-pass" class="div-inputs">
					As senhas devem ser idêntica
				</div>

				<div class="div-inputs">
					<button type="button" onclick="verificaSenhas()">
						Cadastre-se
					</button>
				</div>
			</form>
			<div style="margin-bottom: 15px;" class="div-info">
				Já possui uma conta? <a href="login.php">Faça o Login</a>
			</div>
		</div>

	</body>
</html>