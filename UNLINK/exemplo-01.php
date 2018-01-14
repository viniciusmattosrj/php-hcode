<?php
	
	/* MANIPULANDO ARQUIVOS - UNLINK*/
	$file = fopen("diversos.txt","w+");

	fclose($file);

	unlink("diversos.txt");

	echo "Arquivo removido com sucesso.";