<?php   

    class Banco{
        public int $numConta;
        protected string $tipo;
        private string $dono;
        private float $saldo;

        private bool $status;

        public function __construct(int $numConta, string $tipo, string $dono)
        {
            $this->numConta = $numConta;
            $this->tipo = $tipo;
            $this->dono = $dono;
            $this->status = true;
            if($this->tipo == "corrente"){
                $this->saldo = 50;
            }elseif($this->tipo == "poupanca"){
                $this->saldo = 150;
            }
        }

        public function abrirConta(){
            if($this->status == true){
                echo "Sua conta já está aberta<br>";
            }else{
                echo "Sua conta foi aberta<br>";
            }
        }
        public function fecharConta(){
            if($this->status == true){
                if($this->saldo > 0){
                    echo "Retire o dinheiro todo da sua conta para poder fecha-la<br>";
                }elseif($this->saldo < 0){
                    echo "Pague suas dividas antes de fechar a conta<br>";
                }else{
                    $this->status = false;
                    echo "Sua conta foi fechada<br>";
                }
            }else{
                echo "Abra uma conta primeiro<br>";
            }
        }
        public function depositar($valor){
            if($this->status == true){
                $this->saldo += $valor;
                echo "Seu saldo foi alterado para: $this->saldo<br>";
            }else{
                echo "Abra uma conta primeiro<br>";
            }
        }
        public function sacar($valor){
            if($this->status == true){
                $this->saldo -= $valor;
                echo "Seu saldo foi alterado para: $this->saldo<br>";
            }else{
                echo "Abra uma conta primeiro<br>";
            }
        }
        public function pagarMensal(){
                if($this->status == true){
                    if($this->tipo == "corrente"){
                        $this->saldo -= 12;
                    }else{
                        $this->saldo -= 20;
                    }
        }else{
                echo "Abra uma conta primeiro<br>";
            }
        }

        public function setNumConta(int $numConta){
            $this->numConta = $numConta;}

        public function getNumConta(){
        return $this->numConta;}
        
        public function setTipo($tipo){
            $this->tipo = $tipo;}

        public function getTipo(){
        return $this->tipo;}    

        public function setDono($dono){
        $this->dono = $dono;}

        public function getDono(){
        return $this->dono;}

        public function setSaldo($saldo){
        $this->saldo = $saldo;}

        public function getSaldo(){
        return $this->saldo;}

        public function setStatus($status){
        $this->status = $status;}

        public function getStatus(){
        return $this->status;}

        public function exibir(){
            if($this->getStatus()){
                $conta = "Aberta";
            }else{
                $conta = "Fechada";
            }
            echo "<h1>Minha Conta</h1><br>";
            echo "Numero da conta: {$this->getNumConta()}<br>";
            echo "Nome: {$this->getDono()}<br>";
            echo "Saldo: {$this->getSaldo()}<br>";
            echo "Tipo: {$this->getTipo()}<br>";
            echo "Status: {$conta}<br>";
        }
} 

    
    