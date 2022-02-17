<?php
require_once "Aluno.php";
class Tecnico extends Aluno{
    private $registroProfissional, $especialidade, $setor, $cargo;

    public function praticar(){
        echo "O aluno técnico {$this->getNome()} está praticando";
    }

    public function getRegistroProfisional()
    {
        return $this->registroProfisional;
    }

    public function setRegistroProfissional($registroProfisional)
    {
        $this->registroProfisional = $registroProfisional;

        return $this;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }
}