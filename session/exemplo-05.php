<?php

    /* SESSION LOCAL ARMAZENAMENTO */
    require_once("config.php");

    echo session_save_path();
    echo "<br>";

    var_dump(session_status());
    switch(session_status())
    {
        case PHP_SESSION_DISABLED:
            echo " - As sessões estiverem desabilitadas";
            break;
        case PHP_SESSION_NONE:
            echo " - As sessões estiverem habilitadas, mas nenhuma existir.";
            break;
        case PHP_SESSION_ACTIVE:
            echo " - As sessões estiverem habilitadas, e uma existir.";
            break;
        default:
            echo " - Opção Inválida";
            break;
    }