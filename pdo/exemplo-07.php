<?php

	/* DATABASE - PDO TRANSACTION */
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");

	$id = 2;

	$stmt->execute(array($id));

	echo "Delete Ok!";

	$conn->commit();

	echo "<br> Transação efetuada com sucesso!";
	

	