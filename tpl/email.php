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
		Caso não passe o utlimo parametro como true, irá assumir como default false logo irá dar um echo na tela.
	*/	
	$html = $tpl->draw( "index", true);

	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "seu-email@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "Sua-Senha";

	//Set who the message is to be sent from
	$mail->setFrom('from@example.com', 'Curso PHP 7');

	//Set an alternative reply-to address
	//$mail->addReplyTo('replyto@example.com', 'First Last');

	//Set who the message is to be sent to
	$mail->addAddress('Email-Destino', 'Olá');

	//Set the subject line
	$mail->Subject = 'Disparo PHP Mailer';

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($html);

	//Replace the plain text body with one created manually
	$mail->AltBody = 'Texto caso o HTML não funcione';

	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	    //Section 2: IMAP
	    //Uncomment these to save your message in the 'Sent Mail' folder.
	    #if (save_mail($mail)) {
	    #    echo "Message saved!";
	    #}
	}

	//Section 2: IMAP
	//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
	//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
	//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
	//be useful if you are trying to get this working on a non-Gmail IMAP server.
	function save_mail($mail)
	{
	    //You can change 'Sent Mail' to any other folder or tag
	    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

	    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
	    $imapStream = imap_open($path, $mail->Username, $mail->Password);

	    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
	    imap_close($imapStream);

	    return $result;
	}

