<?php

	$dir1 = "folder_01";
	$dir2 = "folder_02";

	/* Por ser uma instrução curta não foi necessário utilizar as chaves e pode ser tudo na mesma linha "CLEAN CODE" ;-) */ 
	if(!is_dir($dir1)) mkdir($dir1);
	if(!is_dir($dir2)) mkdir($dir2);

	$filename = "README.txt";

	if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename))
	{
		$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

		fwrite($file, date("Y/m/d H:i:s"));

		fclose($file);
	}

	rename(
		$dir1 .DIRECTORY_SEPARATOR . $filename, // Origem arquivo
		$dir2 .DIRECTORY_SEPARATOR . $filename  // Destino arquivo
	);

	echo "Arquivo movido com sucesso";