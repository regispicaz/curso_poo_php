<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao{
    //Atributos
    private $titulo, $autor, $totPag, $pagAtual, $aberto, $leitor;

    //Métodos ou função
    public function detalhes(){
        
    }

    //Método Construtor
    public function __construct($titulo, $autor,$totPag,$leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->leitor = $leitor;
    }
    
    //GettersSetters
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPag()
    {
        return $this->totPag;
    }

    public function setTotPag($totPag)
    {
        $this->totPag = $totPag;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->aberto = false;
    }
    public function folear($p){
        if($p > $this->totPag){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }
    public function avancar(){
        $this->pagAtual ++;
    }
    public function voltar(){
        $this->pagAtual --;
    }
}