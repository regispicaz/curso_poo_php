<?php
require_once "Mamifero.php";
class Cachorro extends Mamifero{
    //Atributos
    private $raca;

    //Métodos
    public function EmitirSom()
    {
        echo "<p>Au au au</p>";
    }
}