<?php
    
    /* SERIALIZANDO ARRAYS vs JSON */
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
    echo json_encode($pessoas);
    echo "</pre>";