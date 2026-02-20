<?php 
    abstract class Veiculos{
        protected int $rodas;
        protected string $cor;
        protected float $comprimento;
        protected string $combustivel;

        private string $finalidade;

        public function setRodas($rodas){
        $this->rodas = $rodas;}

        public function getRodas(){
        return $this->rodas;}

        public function setCor($cor){
        $this->cor = $cor;}

        public function getCor(){
        return $this->cor;}

        public function setComprimento($comprimento){
        $this->comprimento = $comprimento;}

        public function getComprimento(){
        return $this->comprimento;}

        public function setCombustivel($combustivel){
        $this->combustivel = $combustivel;}

        public function getCombustivel(){
        return $this->combustivel;}

        public function setFinalidade($finalidade){
        $this->finalidade = $finalidade;}

        public function getFinalidade(){
        return $this->finalidade;}

        abstract protected function locomover();
        abstract protected function abastecer();

    }