<?php 

class Monitor{
    private string $marca;
    private string $tipotela;
    private string $polegada;
    private string $cor;
    private int $preco;

    public function __construct(string $marca, string $tipotela, string $polegada, string $cor, int $preco) {
        $this->marca = $marca;
        $this->tipotela = $tipotela;
        $this->polegada = $polegada;
        $this->preco = $preco;
        $this->cor = $cor;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function getMarca(){
        return $this->marca;
    }    

      public function setTipotela($tipotela){
        $this->tipotela = $tipotela;
    }
    
    public function getTipotela(){
        return $this->tipotela;
    }  

      public function setCor($cor){
        $this->cor = $cor;
    }
    
    public function getCor(){
        return $this->cor;
    }  

      public function setPolegada($polegada){
        $this->polegada = $polegada;
    }
    
    public function getPolegada(){
        return $this->polegada;
    }  

      public function setPreco($preco){
        $this->preco = $preco;
    }
    
    public function getPreco(){
        return $this->preco;
    }  

}