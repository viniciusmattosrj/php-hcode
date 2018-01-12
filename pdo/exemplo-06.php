<?php

	/* DATABASE - PDO TRANSACTION */
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","#Dev@8481");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

	$id = 2;

	$stmt->execute(array($id));

	if($conn->rollback())
	{
		echo "Foi efetuado o rollback na transação!";
	}
	else
	{
		echo "Delete Ok!";
	}

	