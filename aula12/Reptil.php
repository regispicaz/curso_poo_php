<?php
require_once "Animal.php";
class Reptil extends Animal{
    //Atributos
    private $corEscama;

    //Métodos
    public function locomover(){
        echo "<p>Rastejando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom(){
        echo "<p>Emitir som de Repitil</p>";
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