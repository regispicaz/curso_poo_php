<?php
class ContaBanco{
  
  // Atributos

  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  // Métodos

  /*
  *Função   : abrirConta
  *Uso      : abrirConta($t);
  *Retorna  : <nada>.
  *Descrição: Verifica o tipo de conta que será aberta e adiciona saldo conforme o tipo de conta aberta.
  */

  public function abrirConta($t){
    $this->setTipo($t);
    $this->setStatus(true);
    if($t == "CC"){
      $this->setSaldo(50);
    }elseif($t == "CP"){
      $this->setSaldo(150);
    }
  }

  /*
  *Função   : fecharConta
  *Uso      : fecharConta();
  *Retorna  : <nada>.
  *Descrição: Verifica o saldo da conta, se saldo for <> 0 não será possível encerrar conta.
  */
  public function fecharConta(){
    if ($this->getSaldo() > 0){
      echo("Conta com saldo, não será possível encerra-lá");
    }elseif($this->getSaldo() < 0){
      echo("Conta em débito, não será possível encerra-lá");
    }else{
      $this->setStatus(false);
      echo "<p>Conta de ". $this->getDono() ." com numero ". $this->getnumConta() . " foi encerrada com sucesso!</p>";
    }
  }

  /*
  *Função   : depositar
  *Uso      : depositar($v);
  *Retorna  : <nada>.
  *Descrição: Verifica se a conta está ativa, se sim, adiciona saldo na conta do cliente.
  */
  public function depositar($v){

    if($this->getStatus()){
      $this->setSaldo($this->getSaldo() + $v);
      echo "<p>O valor de $v foi depositado na conta de ". $this->getDono() . "</p>";
    }else {
      echo "<p>conta encerrada, Não é possível depositar.</p>";
    }
  }

  /*
  *Função   : sacar
  *Uso      : sacar($v);
  *Retorna  : <nada>.
  *Descrição: Verifica se a conta está ativa e se há saldo, se verdadeiro realiza o saque.
  */
  public function sacar($v){
    
    if($this->getStatus()){
      if($this->getSaldo() >= $v){
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Saque de $v autorizado na conta de ". $this->getDono() . ".</p>";
      }else{
        echo "<p>Saldo insuficiente para realizar o saque</p>";
      }
    }else {
      echo"<p>Não é possível sacar, sua conta foi encerrada</p>";
    }

  }

  /*
  *Função   : pagarMensal
  *Uso      : pagarMensal($v);
  *Retorna  : <nada>.
  *Descrição: verifica o tipo de conta e se há saldo para aplicar a taxa correspondente.
  */
  public function pagarMensal(){
    
    if($this->getTipo() == "CC"){
      $v = 12;
    }else if ($this->getTipo() == "CP"){
      $v = 20;
    }

    if($this->getStatus()){
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Foi pago a mensalidade de $v na conta de" .$this->getDono() . ".</p>";
      }else{
        echo "<p>Problemas com a conta, não posso cobrar.</p>";
      }

  }

  // Métodos Especiais


  //Metodo construtor
  public function __construct(){
    $this->setSaldo(0);
    $this->setStatus(false);

    // Assim que criada a conta, a mesma dispara a mensagem de conta criada (não é boa pratica fazer isso, estamos fazendo para fins de didaticos)
    echo "<p>Conta criada com sucesso.</p>";
  }

  // Getters e Setters
  public function getnumConta(){
    return $this->numConta;
  }

  public function setnumConta($nc){
    $this->numConta = $nc;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  
  public function setTipo($tipo){
    $this->tipo = $tipo;

    return $this;
  }

  public function getDono(){
    return $this->dono;
  }

  public function setDono($dono){
    $this->dono = $dono;

    return $this;
  }

  public function getSaldo(){
    return $this->saldo;
  }

  public function setSaldo($saldo){
    $this->saldo = $saldo;

    return $this;
  }

  public function getStatus(){
    return $this->status;
  }

  public function setStatus($status){
    $this->status = $status;

    return $this;
  }
}