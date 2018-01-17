<?php

	/* INJECTION */
	
	if($_SERVER["REQUEST_METHOD"] === 'POST')
	{
		/* A função escape acrescenta barra para evitar a execução de comandos */		
		$cmd = escapeshellcmd($_POST["cmd"]);

		var_dump($cmd);

		echo "<pre>";

		$comando = system($cmd, $retorno);

		echo "</pre>";
	}	
?>

<form method="post">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>
	