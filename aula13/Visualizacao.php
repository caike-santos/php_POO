<?php 
    require_once 'Gafanhoto.php';
    require_once 'Video.php';
    class Visualizacao{
        private Gafanhoto $espectador;
        private Video $filme;

        public function __construct(Gafanhoto $esp, Video $f){
            $this->espectador = $esp;
            $this->filme = $f;
            $this->filme->setviews($this->filme->getviews()+1);
            $this->espectador->ViuMaisUm();
            $this->espectador->ganharExp();
        }

        public function getespectador(){
        return $this->espectador;}
        public function setespectador($espectador){
        $this->espectador = $espectador;}
        public function getfilme(){
        return $this->filme;}
        public function setfilme($filme){
        $this->filme = $filme;}

        public function avaliar(){
            $this->filme->setavaliacao(5);
        }
        public function avaliarNota($nota){
            $this->filme->setavaliacao($nota);
        }
        public function avaliarPorc($porc){
            if($porc < 20){
                $this->filme->setavaliacao(2);
            }elseif($porc < 50){
                $this->filme->setavaliacao(5);
            }else{
                $this->filme->setavaliacao(10);
            }

        }
    }