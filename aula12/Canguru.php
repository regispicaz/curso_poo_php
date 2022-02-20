<?php
require_once "Mamifero.php";
class Canguru extends Mamifero{
    //Atributos
    private $tipo;

    //Métodos
    public function Locomover()
    {
        echo "<p>Saltando</p>";
    }

    public function usarBolsa()
    {
        echo "<p>Usando bolsa</p>";
    }
    //Métodos Especiais
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}
