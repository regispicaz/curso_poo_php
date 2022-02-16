<?php

require_once "Pessoa.php";//Requisitando arquivo para extender a classe
class Aluno extends Pessoa{
    //Atributo
    private $matricula, $curso;


    //Método
    public function cancelarMat(){
        echo "Matricula será cancelada<br>";
    }

  
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}