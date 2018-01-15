<?php
	/* TRY e CATCH  */
	function error_handler($code, $message, $file, $line)
	{
		echo json_encode(array(
			'code'=>$code,
			'message'=>$message,
			'file'=>$file,
			'line'=>$line
		));
	}

	/* O parametro passado deve ser um string e exato NOME da função */
	set_error_handler("error_handler");

	$total = 100 /0;