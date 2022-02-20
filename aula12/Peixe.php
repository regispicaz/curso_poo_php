<?php
require_once "Animal.php";
class Peixe extends Animal{
    //Atributos
    public $corEscama;

    //Métodos
    public function locomover(){
        echo "<p>Nadando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo substâncias</p>";
    }

    public function emitirSom(){
        echo "<p>Som de Peixe</p>";
    }

    public function soltarBolha(){
        echo "<p>Soltando bolha</p>";
    }
    
    //Metodos Especiais
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}