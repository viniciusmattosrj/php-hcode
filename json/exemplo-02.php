<?php

    /* SERIALIZANDO JSON vs ARRAYS */
    $json = '[{"nome":"Vin\u00edcius","idade":30},{"nome":"Fernanda","idade":29}]';

    $data = json_decode($json,true);

    echo "<pre>";
    var_dump($data);
    echo "</pre>";