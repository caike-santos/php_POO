<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa{
        private int $matricula;
        private string $curso;

        public function __construct(int $m, string $c, string $n, int $i, string $s){
            $this->setCurso($c);
            $this->setMatricula($m);
            $this->setSexo($s);
            $this->setIdade($i);
            $this->setNome($n);
        }

        public function setMatricula($matricula){
        $this->matricula = $matricula;}

        public function getMatricula(){
        return $this->matricula;}

        public function setCurso($curso){
        $this->curso = $curso;}
        public function getCurso(){
        return $this->curso;}

        public function fecharMatri(){
            $this->setMatricula(0);
        }
    }