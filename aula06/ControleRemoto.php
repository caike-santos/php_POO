<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    private int $volume;
    private bool $ligado;
    private bool $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    public function getVolume(){
    return $this->volume;}

    public function setVolume($volume){
    $this->volume = $volume;}

    public function getLigado(){
    return $this->ligado;}

    public function setLigado($ligado){
    $this->ligado = $ligado;}

    public function getTocando(){
    return $this->tocando;}

    public function setTocando($tocando){
    $this->tocando = $tocando;}

        public function ligar(){
            if($this->getLigado()){
                echo "O dispositivo já está ligado<br>";
            }else{
                $this->setLigado(true);
                echo "O dispositivo foi ligado com sucesso<br>";
            }
        }
        public function desligar(){
            if($this->getLigado()){
                 $this->setLigado(false);
                echo "O dispositivo foi desligado com sucesso<br>";
            }else{
               echo "O dispositivo já está desligado<br>";
            }
        }
        public function abrirMenu(){
            if($this->getLigado()){
                echo "---------Menu----------<br>";
                echo "Ligado<br>";
                echo "Volume: ";
                for($i=0; $i<=$this->getVolume();$i+=5){
                    echo "|";
                }
                echo "<br>";
                echo "Tocando: ";
                if($this->getTocando()){
                    echo "Sim!<br>";
                }else{
                    echo "Não!<br>";
                }
            }else{
                echo "---------Menu----------<br>";
                echo "Desligado<br>";
            }
        }
        public function fecharMenu(){
                echo "Fechando o Menu...<br>";
        }
        public function maisvolume(){
            if($this->getVolume()<100){
                $this->setVolume($this->getVolume()+5);
                echo "Volume atual: {$this->getVolume()}<br>";
            }else{
                echo "Volume Máximo atingido<br>";
            }
        }
        public function menosVolume(){
            if($this->getVolume()>0){
                $this->setVolume($this->getVolume()-5);
                echo "Volume atual: {$this->getVolume()}<br>";
            }else{
                echo "Volume Mínimo atingido<br>";
            }
        }
        public function ligarMudo(){
            if($this->getVolume()>0){
                $this->setVolume(0);
            }else{
                echo "O volume já está no mudo<br>";
            }
        }
        public function desligarMudo(){
            if($this->getVolume()==0){
                $this->setVolume(50);
            }else{
                echo "O volume não está mutado<br>";
            }
        }
        public function play(){
            if($this->getTocando()){
                echo "A midia já está sendo reproduzida<br>";
            }else{
                $this->setTocando(true);
            }
        }
        public function pausar(){
            if($this->getTocando()){
                $this->setTocando(false);
            }else{
                echo "A midia já está pausada<br>";
            }
        }
} 