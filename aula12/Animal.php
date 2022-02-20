<?php
abstract class Animal{//Não pode ser instanciada
    //Atributos
    protected $peso, $idade, $membros;

    //Métodos
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    //Métodos Especiais
    

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getMembros()
    {
        return $this->membros;
    }

    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }
}