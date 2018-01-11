<?php

    /* POO - AUTOLOAD */
    require_once ("../../exibe-erros.php");

    function __autoload($nomeClasse)
    {
        var_dump($nomeClasse);
        require_once ("$nomeClasse.php");          
    }
    
    $carro = new DelRey();
    $carro->acelerar(80);

    
     

    