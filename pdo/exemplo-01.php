<?php

	/* DATABASE - PDO */
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	var_dump($results);
	echo "</pre>";
