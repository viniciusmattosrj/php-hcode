<!-- CROSS SITE SCRIPTING - XSS -->
<form>
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php
	
	$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("Ok")</script>';

	if(isset($_POST['busca']))
	{
		/* Para que seja removido todas as tags do post e deixe liberado somente as que vc informa no ultimo parametro */
		echo strip_tags($_POST['busca'], "<strong>");

		/* Caso você queira que não remova e transforme o ataque em texto */
		echo htmlentities($_POST['busca']);
	}
?>