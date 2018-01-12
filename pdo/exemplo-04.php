<?php

	/* DATABASE - PDO UPDATE */	
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE id_usuario = :ID");

	$id = 4;

	$login = "Vinicius";

	$password = "asdfg";

	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);
	$stmt->bindParam(":ID",$id);

	$stmt->execute();

	echo "Alterado Ok";