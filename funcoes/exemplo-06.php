<?php

    /* Parâmetros por Valor e Referencia */
    $pessoa = array(
        'nome'=>'Vinicius',
        'Idade'=>20
    );

    foreach ($pessoa as $value)
    {
        if(gettype($value) === 'integer') $value += 10;
        {
            echo $value.'<br>';
        }        
    }

    print_r($pessoa);