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
	$lista = Usuario::getList();

	echo json_encode($lista); 
		
