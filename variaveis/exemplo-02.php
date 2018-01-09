<?php
    $anoNascimento = 1986;
    
    //Padrão variavel camelCase
    $nome = "Vinicius";
    $sobreNome = "Mattos";
    $nomeCompleto = $nome . " " . $sobreNome;
    echo $nomeCompleto;
    exit;

    echo $nome;
    echo "<br/>";

    //Unset limpou(destruiu) a variável
    unset($nome);
    if(isset($nome))
    {
        echo $nome;
    }
    
    
    