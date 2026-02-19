<?php 
    abstract class Pessoa{
        private string $nome;
        private int $idade;
        private string $sexo;

        public function __construct(string $n, int $i, string $s){
            $this->setSexo($s);
            $this->setIdade($i);
            $this->setNome($n);
        }

        public function setNome($nome){
        $this->nome = $nome;}

        public function getNome(){
        return $this->nome;}

        public function setIdade($idade){
        $this->idade = $idade;}

        public function getIdade(){
        return $this->idade;}

        public function setSexo($sexo){
        $this->sexo = $sexo;}

        public function getSexo(){
        return $this->sexo;}

        public final function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
    }