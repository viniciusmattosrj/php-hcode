<?php

	/* SQL INJECTION */
	$id = (isset($_GET["ID"]))?$_GET["id"]:3;

	$conn = mysqli_connect("localhost","root","","dbphp7");

	$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";

	$exec = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_object($exec))
	{
		echo "<pre>";
		var_dump($resultado);
		echo "</pre>";
	}


	/*
		Exemplo de comando para exibir todos os dados
		localhost:8000/seguranca/exemplo-02.php?id=4 OR 1 = 1 --
	*/