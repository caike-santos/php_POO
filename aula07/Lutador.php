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
            $this->peso = $p;
            
            if($p<=50){
                $this->setCategoria("Invalida");
            }elseif($p<=70){
                $this->setCategoria("Leve");
            }elseif($p<=80){
                $this->setCategoria("Media");
            }else{
                $this->setCategoria("Pesada");
            }
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
        $this->peso = $peso;}

        public function getPeso(){
        return $this->peso;}

        public function setCategoria($categoria){
        $this->categoria = $categoria;}

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
            echo "Nome: {$this->getNome()}";
            echo "Nascionalidade {$this->getNascionalidade()}";
            echo "Idade: {$this->getIdade()}";
            echo "Altura: {$this->getAltura()}";
            echo "Peso: {$this->getPeso()}";
            echo "Categoria: {$this->getCategoria()}";
            echo "Vitorias: {$this->getVitorias()}";
            echo "Derrotas: {$this->getDerrotas()}";
            echo "Empates: {$this->getEmpates()}";
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