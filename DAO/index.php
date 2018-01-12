<?php
	
	/* PDO - DAO */
	require_once("config/config.php");

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);