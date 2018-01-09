<?php

    $nome = (int)$_GET["a"];
    var_dump($nome);
    echo "<br/>";

    /* Capturando IP */
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;

    //Muito utilizado para gerar log
    echo "<br/>";
    $log = $_SERVER["SCRIPT_NAME"];
    echo $log;