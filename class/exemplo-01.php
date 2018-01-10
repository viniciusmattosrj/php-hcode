<?php

    /* POO - CRIANDO CLASSE */

    class Pessoa{
        public $nome; //Atributo

        public function falar(){ //Método
            return "O meu nome é ".$this->nome;
        }
    }

    $vinicius = new Pessoa();
    $vinicius->nome = "Vinicius Mattos";
    echo $vinicius->falar();