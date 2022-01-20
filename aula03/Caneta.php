<?php
    class Caneta{ //Nome do arquivo de classe e classe com primeira letra Maiúscula 
        //Atributos do PHP sempre caixa baixa
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        //Metodos
        public function rabiscar(){

            if($this->tampada == true){
                print "<p>Não posso rabiscar, pois a caneta está tampada</p>";
            }else print "<p>Estou rabiscando...</p>";

        }

        public function tampar(){
            $this->tampada = true;
        }

        public function destampar(){
            $this->tampada = false;
        }

    }


