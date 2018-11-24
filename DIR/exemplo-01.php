<?php

    /* CRIANDO E REMOVENDO ARQUIVOS */
    $name = "images";

    if(!is_dir($name))
    {
        mkdir($name);
        echo "Diretório $name criado com sucesso!";
    }
    else
    {
        rmdir($name);
        echo "Já existe o diretório. O diretório $name foi apagado!";
    }