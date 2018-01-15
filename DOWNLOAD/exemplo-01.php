<?php

	/* MANIPULANDO ARQUIVOS - DOWNLOAD */
	$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

	$content = file_get_contents($link);

	/* Realizei uma conversão da imagem */
	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);
?>
<!-- Quando eu abro o php e logo em seguida acrescento o igual significa que estou fazendo a função echo -->
<img src="<?=$basename?>">