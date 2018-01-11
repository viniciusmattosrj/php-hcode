<?php
    require_once "../../exibe-erros.php";

    /* POO - INTERFACES */

    interface veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($velocidade);
    }

    class Civic implements Veiculo
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

    $carro = new Civic();

    $carro->trocarMarcha(1);