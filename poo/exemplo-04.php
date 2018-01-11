<?php

    /* POO - MÉTODOS MÁGICOS - CONSTRUTOR */

    class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a,$b,$c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->$cidade = $c;
        }

    }

    $meuEndereco = new Endereco("Av. Américas",700,"Rio de Janeiro");

    echo "<pre>";
    var_dump($meuEndereco);
    echo "</pre>";