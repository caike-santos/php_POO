<?php 
    class Celular{
        public string $modelo;
        public string $cor;
        private string $dono;
        protected string $ip;

        public function cor(){
            echo "A cor do aparelho é: $this->cor <br>";
        }

        public function ip($ipnum){
            $this->ip = $ipnum; 
            echo "O ip do aparelho é: $this->ip<br>";
        }
    }