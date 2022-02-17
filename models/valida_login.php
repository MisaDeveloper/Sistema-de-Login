<?php 

	clearstatcache();

	require 'conexao.php';
	require 'action.php';

	$conexao = new Conexao();
	$action = new Action($conexao->conectar(), $_POST['email'], $_POST['password']);

	//print_r($_POST);
	if(isset($_GET['action']) && $_GET['action'] == 'autenticar') {
		$lista = $action->retornar();
		$autentica = false;

		foreach ($lista as $key) {
			
			if($key['email'] == $_POST['email'] && $key['senha'] == sha1($_POST['password'])) {
				$autentica = true;
			}
		}

		if($autentica == true) {
			echo 'voce foi logado';
		} else {
			header('Location:http://localhost/Sistema%20de%20login/views/login.php?autentication=notAut');
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'cadastrar') {
		$action->cadastrar();
		header('Location:http://localhost/Sistema%20de%20login/views/login.php?autentication=created');
	}

?>