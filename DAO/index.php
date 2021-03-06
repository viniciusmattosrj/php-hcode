<?php
	
	/* PDO - DAO */
	require_once ("config/config.php");

	/* 1º) Lista um único usuário */ 
	/*
		$root = new Usuario();

		$root->loadById(4);

		echo $root;
	*/
	
	/* 2º) Carrega uma lista de usuários */ 
	/*
		$lista = Usuario::getList();
	
		echo json_encode($lista); 
	*/	

	/* 3º) Carrega uma lista de usuários buscando pelo login  */ 
	/* 
		$search = Usuario::search("eu");

		echo json_encode($search);
	*/

	/* 4º) Carrega informações usuário após login e senha  */ 
	/*
		$usuario = new Usuario();
		$usuario->login("Vizeu","Fl@2018");
		echo  $usuario;
	*/
	
	/* 5º) Criando um novo usuário */ 
	//$aluno = new Usuario();

	/* CLEAN CODE - Usando o construtor omitindo essa passagem de parametros
		$aluno->setDeslogin("Andrade");
		$aluno->setDessenha("@qwert");
	*/

	/*
		$aluno = new Usuario("Adilio","Mundial81");
		$aluno->insert();

		echo $aluno;
	*/

	/* 6º) Realizando atualizando os dados  */ 
	/*
		$usuario = new Usuario();

		$usuario->loadById(7);

		$usuario->update ("Reinaldo", "Fl@1999");

		echo $usuario;
	*/

	/* 7º) Excluindo os dados  */
	$usuario = new Usuario();

	$usuario->loadById(10);

	$usuario->delete();

	echo $usuario;