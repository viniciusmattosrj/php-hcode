<?php
	
	/* PDO - DAO */
	require_once ("config/config.php");

	$root = new Usuario();

	$root->loadById(4);

	echo $root;
	
	/*
		$sql = new Sql();

		$usuarios = $sql->select("SELECT * FROM tb_usuarios");

		echo json_encode($usuarios);
	*/