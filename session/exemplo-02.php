<?php

    /* SESSION */
    require_once("config.php");
    //Limpa as variavéis de sessão
    session_unset($_SESSION['nome']);
    
    echo $_SESSION["nome"];
    //Limpa as variavéis de sessão e gera uma nova chave 
    session_destroy();