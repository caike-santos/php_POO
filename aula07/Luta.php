<?php 
        require_once 'Lutador.php';
    class Luta{

        private Lutador  $desafiado;
        private Lutador $desafiante;
        private int $rounds;
        private bool $aprovada;


        public function marcarLuta($l1, $l2){
            if($l1->getCategoria() == $l2->getCategoria() && $l1!=$l2){
                $this->desafiado = $l1;
                $this->desafiante = $l2;
                $this->aprovada = true;
                echo "Luta aprovada!<br>";
            }else{
                $this->aprovada = false;
                echo "Luta invalida!<br>";
            }
        }

        public function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiado->status();
                $this->desafiante->apresentar();
                $this->desafiante->status();

                $i = random_int(0,2);
                $this->rounds = random_int(1, 5);
        
                if($i == 0){
                    echo "<strong>";
                    echo "Empate em $this->rounds rounds<br><br>";
                    echo "</strong>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    $this->desafiado->status();
                    $this->desafiante->status();
                }elseif($i == 1){
                    echo "<strong>";
                    echo "{$this->desafiado->getNome()} Ganhou $this->rounds rounds<br><br>";
                    echo "</strong>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    $this->desafiado->status();
                    $this->desafiante->status();
                }else{
                    echo "<strong>";
                    echo  "{$this->desafiante->getNome()} Ganhou em $this->rounds rounds <br><br>";
                    echo "</strong>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    $this->desafiado->status();
                    $this->desafiante->status();
                }
            
            }else{
                echo "A luta foi classificada como invalida<br>";
            }
        }
    }