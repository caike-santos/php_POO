<?php 
    require_once 'Terrestre.php';
    class Caminhao extends Terrestre{
        private string $cargaMax;
        private int $eixos;
        private string $marca;
        private string $material;

        public function getCargaMax(){
        return $this->cargaMax;}
        public function setCargaMax($cargaMax){
        $this->cargaMax = $cargaMax;}
        public function getEixos(){
        return $this->eixos;}
        public function setEixos($eixos){
        $this->eixos = $eixos;}
        public function getMarca(){
        return $this->marca;}
        public function setMarca($marca){
        $this->marca = $marca;}
        public function getMaterial(){
        return $this->material;}
        public function setMaterial($material){
        $this->material = $material;}

        public function carregar(){
            echo "Carregando o Caminhao da marca {$this->getMarca()} com {$this->getMaterial()}}<br>";
        }

        public function tempodeCaregamento(int $p){
            if($p <= 3){
                echo "Carregando lentamente<br>";
            }else{
                echo "Carregando rapidamente<br>";
            }
        }

        public function tempodeCarregamento(float $peso){
            if($peso <= 500){
                echo "Carregando rapidamente<br>";
            }else{
                echo "Carregando lentamente<br>";
            }
        }

    }