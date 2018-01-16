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
	
	/*
		$tpl->assign( "name", " Obi Wan Kenoby" );
	*/
	
	/*
		$tpl->assign( "Week", array( "Monday", "Tuesday", "Wednesday", "Thurday", "Friday", "Saturday", "Sunday"));
	*/
	$tpl->draw( "index" );