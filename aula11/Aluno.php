<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $maricula, $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
    }

    public function getMaricula()
    {
        return $this->maricula;
    }

    public function setMaricula($maricula)
    {
        $this->maricula = $maricula;

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