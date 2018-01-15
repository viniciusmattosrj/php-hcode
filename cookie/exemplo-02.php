<?php
	
	/* USANDO A Cookies */
	/* Variavél super global */
	if(isset($_COOKIE["NOME_DO_COOKIE"]))
	{
		$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

		echo $obj->empresa;
	}