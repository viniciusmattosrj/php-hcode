<?php
    require_once "../../exibe-erros.php";

    /* POO - CLASSE ABSTRATA */

    interface veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($velocidade);
    }

    abstract class Automovel implements Veiculo
    {
        public function acelerar($velocidade)
        {
            echo "O veículo acelerou até " .$velocidade. "Km/h";
        }

        public function frenar($velocidade)
        {
            echo "O veículo frenou até " .$velocidade. "Km/h";
        }

        public function trocarMarcha($marcha)
        {
            echo "O veículo engatou a " .$marcha. " marcha";
        }
    }

    class DelRey extends Automovel {

        public function empurrar()
        {

        }
    }

    $carro = new DelRey();
    
    $carro->acelerar(200);
    

    