<?php

    $nome = "Vinícius";
    
    function teste()
    {
        global $nome;
        echo $nome;
    }

    function teste2()
    {
        $nome = "Mattos";
        echo $nome. " agora no teste 2";
    }

    teste();
    
    echo "<br/>";

    teste2();