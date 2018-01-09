<?php
    
    /* ARRAYS */
    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Vinícius',
        'idade'=>30
    ));

    array_push($pessoas, array(
        'nome'=>'Fernanda',
        'idade'=>29 
    ));

    echo "<pre>";
    print_r($pessoas[0]['nome']);
    echo "</pre>";