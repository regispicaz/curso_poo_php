<?php

class Videogame {
  
  // Atributos
  public $marca;
  public $modelo;
  private $media;

  // Método construtor
  public function __construct(){
    $this->marca = "Microsoft";
    $this->modelo = "XBOX";
    $this->media = "DVD";
  }

  // Função getMarca
  public function getMarca(){
    return $this->marca;
  }
  
  // Função setMarca
  public function setMarca($marc){
    $this->marca = $marc;
  }

  // Função getModelo
  public function getModelo(){
    return $this->modelo;
  }

  // Função setModelo
  public function setModelo($mod){
    $this->modelo = $mod;
  }

  // Função getMedia
  public function getMedia(){
    return $this->media;
  }

  // Function setMedia
  public function setMedia($med){
    $this->media = $med;
  }

}