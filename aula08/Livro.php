<?php 
    require_once 'Pessoa.php';
    class Livro{
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
        }

        public function detalhes(){
            
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