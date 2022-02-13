<?php

require_once 'Lutador.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    // Métodos Públicos
    function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);

            switch($vencedor){
                case 0: //Empate
                    echo "<br><h3><p>Empate</p></h3>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();

                    echo "<br><p>Dados após luta</p>";
                    $this->desafiado->status();
                    $this->desafiante->status();

                    break;
                
                case 1: //Desafiado vence
                    echo "<br><h3><p>{$this->desafiado->getNome()} venceu</p></h3>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    echo "<br><p>Dados após luta</p>";
                    $this->desafiado->status();
                    $this->desafiante->status();

                    break;

                case 2: //Desafiante vence
                    echo "<br><h3><p>{$this->desafiante->getNome()} venceu</p></h3>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    
                    echo "<br><p>Dados após luta</p>";
                    $this->desafiado->status();
                    $this->desafiante->status();

                    break;

            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }


    function getDesafiado(){
        return $this->desafiado;
    }

    function getDesafiante(){
        return $this->desafiante;
    }

    function getRounds(){
        return $this->rounds;
    }

    function getAprovada(){
        return $this->aprovada;
    }

    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds){
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }


}