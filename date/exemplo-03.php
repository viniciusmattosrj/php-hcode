<?php

    /* MANIPULANDO DATA */
    // O LCC_ALL é uma constante do php e significa, mude toda a configuração para português.
    setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");

    echo ucwords(strftime("%A %B"));
