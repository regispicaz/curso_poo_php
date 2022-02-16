<?php
require_once "Pessoa.php";//Requisitando arquivo para extender a classe
class Funcionario extends Pessoa{
    //Atributos
    private $setor, $trabalhando;

    //Métodos
    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando; //Inversor (!) ou "não" em php
    }
     
    //Métodos especiai
    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }
 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }
}