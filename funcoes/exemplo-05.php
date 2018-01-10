<?php

    /* Parâmetros por Valor e Referencia */
    $a = 10;
    
    function trocaValor(&$b)
    {
        $b += 50;
        return $b;
    }
    
    echo trocaValor($a);
    echo "<br>";
    echo trocaValor($a);
    echo "<br>";
    echo $a;