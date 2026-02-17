<?php 
    class Pessoa{
        private string $nome;
        private int $idade;
        private string $sexo;

        public function __construct(string $n, int $i, string $s){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }

        public function getnome(){
        return $this->nome;}

        public function setNome($nome){
        $this->nome = $nome;}

        public function getIdade(){
        return $this->idade;}

        public function setIdade($idade){
        $this->idade = $idade;}

        public function getSexo(){
        return $this->sexo;}

        public function setSexo($sexo){
        $this->sexo = $sexo;}

        public function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
    }