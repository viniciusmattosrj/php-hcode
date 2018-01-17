<?php

	$pasta = "arquivos";
	$permissao = "0775";

	if(!is_dir($pasta)) mkdir($pasta, $permissão);

	echo "Diretório criado com sucesso";