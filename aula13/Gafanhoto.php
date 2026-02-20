<?php 
    require_once 'Pessoas.php';
    class Gafanhoto extends Pessoas{
        private string $login;
        private int $totAssistido;

        public function __construct(string $n, int $i, string $s, string $l){
            parent:: __construct($n, $i, $s);
            $this->settotAssistido(0);
            $this->setlogin($l);
        }

        public function getlogin(){
        return $this->login;}
        public function setlogin($login){
        $this->login = $login;}
        public function gettotAssistido(){
        return $this->totAssistido;}
        public function settotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;}

        public function ViuMaisUm(){
            $this->settotAssistido($this->gettotAssistido()+1);
        }
    }