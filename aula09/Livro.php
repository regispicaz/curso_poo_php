<?php

require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;



    function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }



    function detalhes(){
        echo "<hr>";
        echo "Livro {$this->titulo} escrito por {$this->autor}";
        echo "<br> Páginas: {$this->totPaginas}";
        echo "<br> Página atual: {$this->pagAtual}";
        echo "<br> Sendo lido por {$this->leitor->getNome()}";
        echo "<hr><br>";
    }



    function abrir(){
        $this->aberto = true;
    }

    function fechar(){
        $this->aberto = false;
    }

    function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    function avancarPag(){
        if($this->getPagAtual() < $this->getTotPaginas()){
            $this->pagAtual++;
        } else {
            echo "<p>Você já está na última página do livro</p>";
        }
    }

    function voltarPag(){
        if($this->getPagAtual() > 0){
            $this->pagAtual--;
        } else {
            echo "<p>Você já está no início do livro</p>";
        }
    }



    function getTitulo(){
        return $this->titulo;
    }

    function getAutor(){
        return $this->autor;
    }

    function getTotPaginas(){
        return $this->totPaginas;
    }

    function getPagAtual(){
        return $this->pagAtual;
    }

    function getAberto(){
        return $this->aberto;
    }

    function getLeitor(){
        return $this->leitor;
    }

    function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    function setAutor($autor){
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    
    function setPagAtual($pagAtual){
        $this->$pagAtual = $pagAtual;
    }

    function setAberto($aberto){
        $this->aberto = $aberto;
    }
    
    function setLeitor($leitor){
        $this->leitor = $leitor;
    }
}