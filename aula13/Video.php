<?php 
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo{
        private string $titulo;
        private string $avaliacao;
        private int $views;
        private int $curtidas;
        private bool $reproduzindo;
        
        public function __construct(string $t){
            $this->titulo = $t;
            $this->avaliacao = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function gettitulo(){
        return $this->titulo;}
        public function settitulo($titulo){
        $this->titulo = $titulo;}
        public function getavaliacao(){
        return $this->avaliacao;}
        public function setavaliacao($avaliacao){
        $media = ($this->avaliacao + $avaliacao)/$this->views;    
        $this->avaliacao = $media;}
        public function getviews(){
        return $this->views;}
        public function setviews($views){
        $this->views = $views;}
        public function getcurtidas(){
        return $this->curtidas;}
        public function setcurtidas($curtidas){
        $this->curtidas = $curtidas;}
        public function getreproduzindo(){
        return $this->reproduzindo;}
        public function setreproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;}

        public function play(){
            if($this->reproduzindo){
                echo "O video já está sendo reproduzido<br>";
            }else{
                $this->reproduzindo = true;
                echo "Reproduzindo...<br>";
            }
        }

        public function pause(){
            if($this->reproduzindo){
                echo "Pausado<br>";
            }else{
                $this->reproduzindo = false;
                echo "O video já está pausado<br>";
            }
        }

        public function like(){
            $this->setcurtidas($this->getcurtidas()+1);
        }
    }