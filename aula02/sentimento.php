<?php 
    class Sentimento{
        public string $natureza;
        public string $nome;
        public string $motivo;

        public function __construct(string $natureza, string $nome, string $motivo)
        {
           $this->motivo = $motivo;
           $this->natureza = $natureza;
           $this->nome = $nome;
        }
    }