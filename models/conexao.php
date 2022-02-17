<?php 

	class Conexao {
		private $host = 'localhost';
		private $dbname = 'projeto_login';
		private $user = 'root';
		private $pass = '';

		public function conectar() {
			try{
				$conexao = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pass);

				return $conexao;
			} 
			catch(PDOException $error) {
				echo 'Error: '.$error->getCode();
				echo '<br>Message: '.$error->getMessage();
			}
		}
	}

?>