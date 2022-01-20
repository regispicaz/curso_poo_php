<?php

class Carro{
    public $marca;
    public $modelo;
    public $cor;
    public $placa;

    public function __construct($marca, $modelo, $cor, $placa){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->placa = $placa;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }




}
?>