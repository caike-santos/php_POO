<?php 
    abstract class Pessoas{
        protected string $nome;
        protected int $idade;
        protected string $sexo;
        protected int $experiencia;

        public function __construct(string $n, int $i, string $s){
            $this->nome = $n;
            $this->idade = $i; 
            $this->sexo = $s;
            $this->experiencia = 0;
            }

        public function getnome(){
        return $this->nome;}
        public function setnome($nome){
        $this->nome = $nome;}
        public function getidade(){
        return $this->idade;}
        public function setidade($idade){
        $this->idade = $idade;}
        public function getsexo(){
        return $this->sexo;}
        public function setsexo($sexo){
        $this->sexo = $sexo;}
        public function getexperiencia(){
        return $this->experiencia;}
        public function setexperiencia($experiencia){
        $this->experiencia = $experiencia;}

        public function ganharExp(){
            $this->setexperiencia($this->getexperiencia()+1);
        }
    }