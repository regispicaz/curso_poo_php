<?php
require_once "Animal.php";
class Ave extends Animal{
    //Atributos
    private $corPena;

    //Métodos
    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom(){
        echo "<p>Emitindo som de Ave";
    }

    public function fazerNinho(){
        echo "<p>Fazendo ninho</p>";
    }

    //Metodos Especiais
    public function getCorPena()
    {
        return $this->corPena;
    }

    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}