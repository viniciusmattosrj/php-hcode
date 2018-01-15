<?php

	/* USANDO A Cookies */
	$data = array(
		"empresa"=>"Hcode Treinamentos"
	);

	/* O tempo deve ser informado em milisegundos */
	setcookie("NOME_DO_COOKIE", time() + 3600);

	echo "Ok";