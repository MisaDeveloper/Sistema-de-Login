<?php 

	class Action {

		private $conexao;
		private $email;
		private $pass;

		public function __construct($conexao, $email, $pass) {
			$this->conexao = $conexao;
			$this->email = $email;
			$this->pass = $pass;
		}

		public function retornar() {
			$query = '
				select * from tb_usuarios;
			';

			$stmt = $this->conexao->prepare($query);
			$stmt->execute();

			$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $lista;
		}

		public function cadastrar() {
			$query = '
				insert into tb_usuarios(email, senha) values(:email, :senha);
			';

			//criptografia da senha
				$encrypt = sha1($this->pass);

			$stmt = $this->conexao->prepare($query);
			$stmt->bindValue(':email', $this->email);
			$stmt->bindValue(':senha', $encrypt);
			$stmt->execute();
		}

	}

?>