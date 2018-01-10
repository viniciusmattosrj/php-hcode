<?php
    /* Parâmetros de funções */
    function ola($texto="Mundo", $periodo="Bom dia")
    {
        return "Olá $texto! $periodo!<br>";
    }

    echo ola("Mundo");
    echo ola("", "Boa noite");
    echo ola("Vinícius", "Boa tarde");
    echo ola("Fernanda","");