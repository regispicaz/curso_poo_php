<?php
require_once "Aluno.php";
class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo "{$this->getNome()} sua bolsa foi renovada com sucesso";
    }

    public function pagarMensalidade(){
        echo "{$this->getNome()}, sua mensalidade foi paga!";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}