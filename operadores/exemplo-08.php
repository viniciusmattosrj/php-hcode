<?php

    /* PRECEDENCIA de OPERADORES */
    $resultado = 10 + 3 / 2;
    echo $resultado ."<br/>";
    
    $resultado = (10 + 3) / 2;
    echo $resultado ."<br/>";

    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
    var_dump($resultado);

