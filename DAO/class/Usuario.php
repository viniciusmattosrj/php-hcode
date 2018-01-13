<?php

	/* PDO SELECT */
	class Usuario
	{
		private $id_usuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario()
		{
			return $this->id_usuario;
		}

		public function getDeslogin()
		{
			return $this->deslogin;
		}

		public function getDessenha()
		{
			return $this->dessenha;
		}

		public function getDtcadastro()
		{
			return $this->dtcadastro;
		}

		public function setIdusuario($value)
		{
			$this->id_usuario = $value;
		}

		public function setDeslogin($value)
		{
			$this->deslogin = $value;
		}

		public function setDessenha($value)
		{
			$this->dessenha = $value;
		}

		public function setDtcadastro($value)
		{
			$this->dtcadastro = $value;
		}

		public function loadById($id)
		{
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE id_usuario = :ID", array(
				":ID"=>$id
			));

			/* Tratamento para evitar enviar um ID inválido */
			if(count($results) > 0)
			{
				$row = $results[0];

				$this->setIdusuario($row['id_usuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));
			} 
		}


		public static function getList()
		{
			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
		}

		public static function search($login)
		{

			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH'=>"%".$login."%"	
			));
		}

		public function login($login, $password)
		{
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
				"LOGIN"=>$login,
				"PASSWORD"=>$password
			));

			if(count($results) > 0)
			{
				$row = $results[0];

				$this->setIdusuario($row['id_usuario']);
				$this->setDeslogin($row['deslogin']);
				$this->setDessenha($row['dessenha']);
				$this->setDtcadastro(new DateTime($row['dtcadastro']));
			} 
			else
			{
				throw new Exception("Login e/ou senha inválidos");
				
			}
		}	

		public function __toString()
		{
			return json_encode(array(
				"id_usuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}
	}
	