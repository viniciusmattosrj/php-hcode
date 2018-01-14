<?php

    /* CRIANDO E REMOVENDO ARQUIVOS */
    $images = scandir("images");

    $data = array();

    foreach($images as $img)
    {
        if(!in_array($img, array(".","..")))
        {
            $filename = "images" . DIRECTORY_SEPARATOR . $img;
            
            $info = pathinfo ($filename);
        
            array_push($data, $info);
        }
    }

    echo json_encode($data);