<?php
class ContaBanco{

    //Atributos
    public $numConta;
    protected $tipoConta;
    private $dono;
    private $saldo;
    private $status;

    //Metodos
    public function abrirConta($t){
        $this -> setTipo($t);
        $this -> setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if  ($this->getSaldo() > 0){
            echo"<p>[ERRO]A conta ainda tem dinheiro</p>";
        }elseif($this->getSaldo() < 0){
            echo"<p>[ERRO] A conta está com saldo negativo</p>";
        }else{
            $this->setStatus(false);
            echo"<p>" . $this->getDono() ." sua conta foi encerrada com sucesso</p>";
        }
    }

    public function depositar($vlr){
        if ($this->getStatus = true){
            $this->setSaldo($this->getSaldo() + $vlr);
            echo"<p>Depósito de R$ $vlr realizado na conta de ". $this->getDono() ."</p>";
        }else{
            echo"<p>Conta encerrada, Não consigo depositar</p>";
        }

    }

    public function sacar($vlr){
        if($this->getStatus == true){
            if($this->getSaldo() >= $vlr){
                $this->setSaldo($this->getSaldo() - $vlr);
                echo"<p>Saque de R$ $vlr autorizado na conta de ". $this->getDono(). "</p>";
            }else{
                echo"<p>[ERRO] Saldo insuficiente</p>";
            }
        }else {
            echo"<p>Conta encerrada, Não pode sacar</p>";
        }
    }

    public function pagarMensal(){
        if($this->getTipo() == "CC"){
            $vlr = 12;
        }elseif ($this->getTipo() == "CP"){
            $vlr = 20;
        }
        if($this->getStatus == true){
            $this->setSaldo($this->getSaldo() - $vlr);
            echo"<p>Saque de R$ $vlr debitado da conta de " . $this->getDono() ."</p>";
        }else{
            echo"<p>[ERRO]Conta encerrada, não possui despesas com o banco</p>";
        }
    }  

    //Métodos Especiais
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>Conta aberta com sucesso</p>";
    }

    public function getNumConta(){
        return $this -> numConta; 
    }

    public function setNumConta($n){
        $this -> numConta = $n;
    }

    public function getTipo(){
        return $this -> tipoConta;
    }

    public function setTipo($tipo){
        $this -> tipoConta = $tipo;
    }

    public function getDono(){
        return $this -> dono;
    }

    public function setDono($dono){
        $this -> dono = $dono;
    }

    public function getSaldo(){
        return $this -> saldo;
    }

    public function setSaldo($saldo){
        $this -> saldo = $saldo;
    }

    public function getSatus(){
        return $this -> status;
    }

    public function setStatus($status){
        $this -> status = $status;
    }

}