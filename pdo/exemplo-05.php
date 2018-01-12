<?php

	/* DATABASE - PDO DELETE */
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","#");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id_usuario = :ID");

	$id = 5;

	$stmt->bindParam(":ID",$id);

	$stmt->execute();

	echo "Apagado com sucesso";