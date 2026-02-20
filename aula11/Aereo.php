<?php 
  require_once 'Veiculos.php';
    class Aereo extends Veiculos{
        private int $asas;
        private float $altMaxdeVoo;

        public function setAsas($asas){
        $this->asas = $asas;}

        public function getAsas(){
        return $this->asas;}

        public function setAltMaxdeVoo($altMaxdeVoo){
        $this->altMaxdeVoo = $altMaxdeVoo;}

        public function getAltMaxdeVoo(){
        return $this->altMaxdeVoo;}

        public function abastecer()
        {
            echo "Abastecendo com {$this->getCombustivel()}<br>";
        }

        public function locomover(){
            echo "Voando<br>";
        }
    }