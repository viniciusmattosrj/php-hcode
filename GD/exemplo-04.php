<?php
	
	/* BIBLIOTECA GD - Fontes TTF - Thumbnail */
	header("Content-type: image/jpeg");

	$file = "wallpaper.jpg";
	
	/* Diferente do .css aqui não precixo passar o sufixo px (pixel) */
	$new_width = 256;
	$new_height = 256;

	list($old_width, $old_height) = getimagesize($file);

	$new_image = imagecreatetruecolor($new_width, $new_height);
	$old_image = imagecreatefromjpeg($fila);

	imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

	imagejpeg($new_image);

	/* Destruindo as imagens da memória. */
	imagedestroy($old_image);
	imagedestroy($new_image);

