<?php 
    require_once 'Veiculos.php';
    class Marinho extends Veiculos{
        private string $propulsao;

        public function setPropulsao($propulsao){
        $this->propulsao = $propulsao;}

        public function getPropulsao(){
        return $this->propulsao;}

        public function locomover()
        {
            echo "Flutuando";
        }

        public function abastecer()
        {
            echo "Abastecendo com {$this->getCombustivel()}<br>";
        }
    }