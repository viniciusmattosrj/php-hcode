<?php

	/* DATABASE - PDO INSERT */
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row)
	{
		foreach ($row as $key => $value)
		{	//Aqui o key e coluna que vem do DB
			echo "<strong>".$key.": </strong>".$value."<br>";
		}

		echo "- - - - - - - - - - - - - - - - - - - - - - - -<br>";
	}

	/*
		echo "<pre>";
		var_dump($results);
		echo "</pre>";
	*/
