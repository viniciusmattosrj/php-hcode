<?php

	/* Templates com RainTPL */
	require_once("vendor/autoload.php");

	use Rain\Tpl;

	$config = array(
		"tpl_dir"    => "tpl/",
		"cache_dir"  => "cache/"
	);
	Tpl::configure( $config );

	$tpl = new Tpl;
	
	/* O assing é onde eu devo informar os valores das variaveis */
	$tpl->assign( "name", "Hcode" );
	$tpl->assign( "version", PHP_VERSION );

	/* 
		Por default ele sempre busca arquivos com extensão .html, logo eu posso omitir na declaração do parametro.
		O draw tendo tudo isso informado busque gere para mim o template.
	*/	
	$tpl->draw( "index" );