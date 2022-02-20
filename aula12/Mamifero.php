<?php
require_once "Animal.php";
class Mamifero extends Animal{
    //Atributo
    private $corPelo; 

    //Métodos
    public function Locomover(){
        echo "<p>Correndo</p>";
    }

    public function Alimentar(){
        echo "<p>Mamando</p>";
    }

    public function EmitirSom(){
        echo "<p>Som de Mamifero</p>";
    }

    //Métodos Especiais
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}