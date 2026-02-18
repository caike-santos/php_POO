<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{
        private string $titulo;
        private string $autor;
        private int $totpaginas;
        private int $pagAtual;
        private bool $aberto;
        private Pessoa $leitor;

        public function __construct(string $ti, string $au, int $tot, Pessoa $leitor){
            $this->setTitulo($ti);
            $this->setAutor($au);
            $this->setTotpaginas($tot);
            $this->setLeitor($leitor);
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        public function abrir(){
            if($this->aberto){
                echo "O livro já está aberto<br>";
                $this->setPagAtual(1);
            }else{
                $this->aberto = true;
                echo "<br><br>Pagina Atual: {$this->getPagAtual()}<br><br>";
            }
        }
        public function fechar(){
            if($this->aberto){
               $this->aberto = true;
               $this->setPagAtual(0); 
               echo "<br><br>Pagina Atual: {$this->getPagAtual()}<br><br>";
            }else{
               echo "O livro já está fechado<br>"; 
            }
        }
        public function folhear($pag){
            if($this->aberto){
                $this->setPagAtual($pag);
                echo "<br><br>Pagina Atual: {$this->getPagAtual()}<br><br>"; 
            }else{
                echo "Abra o livro primeiro<br>";
            }
        }
        public function avançarPag(){
            if($this->aberto){
                if($this->pagAtual == $this->totpaginas){
                    echo "Voce já está na ultima pagina<br>";
                }else{
                   $this->pagAtual++; 
                   echo "<br><br>Pagina Atual: {$this->getPagAtual()}<br><br>";
                }
            }else{
                echo "Abra o livro<br>";
            }
        }
        public function voltarPag(){
            if($this->aberto){
                if($this->pagAtual == 1){
                    echo "Voce já está na Primeira pagina pagina<br>";
                }else{
                   $this->pagAtual--; 
                   echo "<br><br>Pagina Atual: {$this->getPagAtual()}<br><br>";
                }
            }else{
                echo "Abra o livro<br>";
            }
        }

        public function detalhes(){
            echo "Título: {$this->getTitulo()}<br>";
            echo "Autor: {$this->getAutor()}<br>";
            echo "Paginas: {$this->getTotpaginas()}<br>";
            echo "Leitor: " . $this->getLeitor()->getnome()."<br><br>";
        }

        public function setTitulo($titulo){
        $this->titulo = $titulo;}

        public function getTitulo(){
        return $this->titulo;}

        public function setAutor($autor){
        $this->autor = $autor;}

        public function getAutor(){
        return $this->autor;}

        public function setTotpaginas($totpaginas){
        $this->totpaginas = $totpaginas;}

        public function getTotpaginas(){
        return $this->totpaginas;}

        public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;}

        public function getPagAtual(){
        return $this->pagAtual;}

        public function setAberto($aberto){
        $this->aberto = $aberto;}

        public function getAberto(){
        return $this->aberto;}

        public function setLeitor($leitor){
        $this->leitor = $leitor;}

        public function getLeitor(){
        return $this->leitor;}

        
        }