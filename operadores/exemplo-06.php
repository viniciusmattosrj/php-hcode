<?php

    /* OPERADORES DE ATRIBUIÇÃO */
    $a = null;

    $b = 8;

    $c = 10;

    //* NOVO * Null Coalesce foi adicionado no php7
    echo $a ?? $b ?? $c;