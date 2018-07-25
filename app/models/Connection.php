<?php

namespace app\models;

use PDO;

class Connection {

    public static function connect() {

        $config = require "../config.php"; 

        $pdo = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}", $config['db']['username'], $config['db']['password']);

        // Caso ocorra algum erro, será exibido na tela o erro abaixo!
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //Para que possa ser chamado como um objeto e não array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
       
        return $pdo;
    }
}