<?php
    /* TIPOS BÁSICOS */
    $nome = "Hcode";
    
    $site = 'www.hcode.com.br';
    
    $ano = 1990;
    
    $salario = 5500.99;

    $bloqueado = false;

    /* TIPOS COMPOSTOS */
    $frutas = array("abacaxi","laranja","manga");
    echo $frutas[2];

    echo "<br/>";

    /* TIPOS OBJETOS */
    $nascimento = new DateTime();
    
    echo "<pre>";
    var_dump($nascimento);
    echo "</pre>";

    echo "<br/>";

    /* TIPOS ESPECIAIS */
    $arquivo = fopen("exemplo-03.php","r");
    var_dump($arquivo);

    echo "<br/>";
    $nulo = NULL; //ausencia de valor
    $vazio = "";

