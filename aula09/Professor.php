<?php 

    require_once 'Pessoa.php';
    class Professor extends Pessoa{
        private string $materia;
        private float $salario;

        public function __construct(string $m, float $sal, string $n, int $i, string $s){
            $this->setMateria($m);
            $this->setSalario($sal);
            $this->setSexo($s);
            $this->setIdade($i);
            $this->setNome($n);
        }

        public function setMateria($materia){
        $this->materia = $materia;}

        public function getMateria(){
        return $this->materia;}

        public function setSalario($salario){
        $this->salario = $salario;}

        public function getSalario(){
        return $this->salario;}

        public function aumSal($aum){
            $this->setSalario($this->getSalario() + $aum);
    }
}