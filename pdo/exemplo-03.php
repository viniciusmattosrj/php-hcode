<?php

	/* DATABASE - PDO INSERT */
	$conn = new PDO("mysql:dbname=dbphp7;host:localhost","root","");

	/* O statement = comando */
	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");

	$login = "jose";
	$senha = "1234567890";

	/* O método bind significar um unir/ligar */
	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$senha);

	$stmt->execute();

	echo "Inserido Ok";

