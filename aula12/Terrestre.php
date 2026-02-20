<?php 
    require_once 'Veiculos.php';
    class Terrestre extends Veiculos{
        public function abastecer(){
            echo "Abastecendo com {$this->getCombustivel()}<br>";
        }
        public function locomover()
        {
            echo "Andando<br>";
        }
    }