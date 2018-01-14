<?php
	
	/* MANIPULANDO ARQUIVOS - UNLINK*/
	if(!is_dir("images")) mkdir ("images");

	foreach (scandir("images") as $item)
    {
        if(!in_array($item, array(".","..")))
        {
        	unlink("images" .DIRECTORY_SEPARATOR. $item);
        }
    }

	