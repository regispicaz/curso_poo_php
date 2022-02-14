<?php

Class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }


    function apresentar(){
        echo "<p>-----------------------------</p>";
        echo "<p>CHEGOU A HORA! O lutador {$this->getNome()}</p>";
        echo "<p>veio diretamente de {$this->getNacionalidade()}</p>";
        echo "<p>tem {$this->getIdade()} anos e pesa {$this->getPeso()} KG.</p>";
        echo "<br> Ele tem {$this->getVitorias()} vitórias,";
        echo " {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates<br>";
    }

    function status(){
        echo "<p>------------------------------</p>";
        echo "<p>{$this->getNome()} é um peso {$this->getCategoria()}</p>";
        echo "<p>e já ganhou {$this->getVitorias()} vezes,</p>";
        echo "<p>perdeu {$this->getDerrotas()} vezes e</p>";
        echo "<p>empatou {$this->getEmpates()} vezes</p><br>";

    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }



    function getNome(){
        return $this->nome;
    }
    
    function getNacionalidade(){
        return $this->nacionalidade;
    }
    
    function getIdade(){
        return $this->idade;
    }

    function getAltura(){
        return $this->altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function getCategoria(){
        return $this->categoria;
    }
    
    function getVitorias(){
        return $this->vitorias;
    }

    function getDerrotas(){
        return $this->derrotas;
    }

    function getEmpates(){
        return $this->empates;
    }



    function setNome($nome){
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        if($this->peso < 52.2){
            $this->categoria = "Inválida";
        } elseif($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates){
        $this->empates = $empates;
    }
}