<?php

	/* USANDO A cURL  */
	$cep = "36016011";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	/* Necessário uma vez que sem essa verificação endereções https não seriam retornardos! */
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	/* O parametro true como 2 parametro e justamente para nesse decode não transformar o json em objeto e sim no array */
	$data = json_decode($response,true);

	echo "<pre>";
	print_r($data);
    echo "</pre>";