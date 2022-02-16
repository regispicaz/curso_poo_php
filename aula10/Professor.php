<?php
require_once "Pessoa.php";//Requisitando arquivo para extender a classe
class Professor extends Pessoa{
    //Atributos
    private $especialidade, $salario;

    //Métodos
    public function receberAumento(){
        echo "Recebeu aumento";
    }

    //Métodos especiais
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}