<?php 
    class Parede{
        public float $altura;
        public float $largura;
        public string $cor;
        public string $material;
        private float $custom2;

            public function __construct(float $altura, float $largura, string $cor, string $material, float $custom2){
                $this->altura = $altura;
                $this->largura = $largura;
                $this->cor = $cor;
                $this->material = $material;
                $this->custom2 = $custom2;
            }
            

            public function pintar($novaCor){
                $this->cor = $novaCor;
            }

            public function m2(){
                return  $this->altura * $this->largura;
                
            }

            public function custo(){
                return $this->custom2 * $this->m2();
                
            }
    }

?>