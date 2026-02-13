<?php 

    class Luta{

        private string $desafiado;
        private string $desafiante;
        private int $rounds;
        private bool $aprovada;

        public function __construct(string $desafiado, string $desafiante, int $rounds){
            $this->desafiado = $desafiado;
            $this->desafiante = $desafiante;
            $this->rounds = $rounds;
        }

        public function marcarLuta(){

        }

        public function lutar(){
            
        }
    }