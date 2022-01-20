<?php

class Caneta{

    //Atributos da classe
    public $modelo;
    private $ponta;
    private $cor;
    public $tampada;

    //Metodo Construtor
    public function __construct($mod, $cor, $pnt){
        $this->modelo = $mod;
        $this->cor = $cor;
        $this->ponta = $pnt;
        $this->tampar();
    }
    /*
    //Metodo constutor
    public function __construct(){//O metodo construtor pode ter o mesmo nome da classe ou o metodo __construct()
        $this->tampar();
        $this->cor = "Roxa";
        $this->ponta = 0.7;
        $this->modelo = "Compactor";
    }
    */

    public function tampar(){
        $this->tampada = true;
    }

    //Metodo Getter
    public function getModelo(){
        return $this->modelo;
    }

    //Método Setter
    public function setModelo($mod){
        $this->modelo = $mod;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($pnt){
        $this->ponta = $pnt;
    }

    
}