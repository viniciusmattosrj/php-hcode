<?php

    /* SESSION DINAMICO */
    session_id('pqtplel8c0oknvc541iatnicnm'); //Forma de recuperar o ID da sessão do usuário

    require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION);