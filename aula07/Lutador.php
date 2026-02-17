<?php 

    class Lutador{
        private string $nome;
        private string $nascionalidade;
        private int $idade;
        private float $altura;
        private float $peso;
        private string $categoria;
        private int $vitorias;
        private int $derrotas;
        private int $empates;

        public function __construct(string $n, string $nasc, int $i, float $al, float $p, int $v, int $d, int $e){
            $this->nome = $n;
            $this->nascionalidade = $nasc;
            $this->idade = $i;
            $this->altura = $al;
            $this->vitorias = $v;
            $this->derrotas = $d;
            $this->empates = $e;
            $this->setPeso($p);
            
            
        }

        public function setNome($nome){
        $this->nome = $nome;}

        public function getNome(){
        return $this->nome;}

        public function setNascionalidade($nascionalidade){
        $this->nascionalidade = $nascionalidade;}

        public function getNascionalidade(){
        return $this->nascionalidade;}

        public function setIdade($idade){
        $this->idade = $idade;}

        public function getIdade(){
        return $this->idade;}

        public function setAltura($altura){
        $this->altura = $altura;}
        
        public function getAltura(){
        return $this->altura;}

        public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();}

        public function getPeso(){
        return $this->peso;}

        private function setCategoria(){
        if($this->peso<=50){
                $this->categoria = "Invalida";
            }elseif($this->peso<=70){
                $this->categoria = "Peso pena";
            }elseif($this->peso<=80){
                $this->categoria = "Peso leve";
            }else{
                $this->categoria = "Peso pesado";
            }}


        public function getCategoria(){
        return $this->categoria;}

        public function setVitorias($vitorias){
        $this->vitorias = $vitorias;}

        public function getVitorias(){
        return $this->vitorias;}

        public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;}

        public function getDerrotas(){
        return $this->derrotas;}

        public function setEmpates($empates){
        $this->empates = $empates;}

        public function getEmpates(){
        return $this->empates;}

        public function apresentar(){
            echo "Está na Arena o lutador {$this->getNome()}<br>";
            echo "Nascido no(a) {$this->getNascionalidade()}<br>";
            echo "Competindo na Categoria {$this->getCategoria()}<br><br>";
        }

        public function status(){
            echo "Nome: {$this->getNome()}<br>";
            echo "Nascionalidade {$this->getNascionalidade()}<br>";
            echo "Idade: {$this->getIdade()}<br>";
            echo "Altura: {$this->getAltura()}<br>";
            echo "Peso: {$this->getPeso()}<br>";
            echo "Categoria: {$this->getCategoria()}<br>";
            echo "Vitorias: {$this->getVitorias()}<br>";
            echo "Derrotas: {$this->getDerrotas()}<br>";
            echo "Empates: {$this->getEmpates()}<br><br>";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas()+1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates()+1);
        }

    }