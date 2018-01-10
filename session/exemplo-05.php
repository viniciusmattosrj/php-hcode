<?php

    /* SESSION LOCAL ARMAZENAMENTO */
    require_once("config.php");

    echo session_save_path();
    echo "<br>";

    var_dump(session_status());
    switch(session_status())
    {
        case 0:
            echo " - Sessões desabilitadas";
            break;
        case 1:
            echo " - Sessões habilitadas, mas nenhuma existe.";
            break;
        case 2:
            echo " - Sessões habilitadas, existe uma ativa.";
            break;
        default:
            echo " - Opção Inválida";
            break;
    }