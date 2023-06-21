<?php
    class Caneta{ //Nome do arquivo de classe e classe com primeira letra Maiúscula 
        //Atributos do PHP sempre caixa baixa
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        //Metodos
        function rabiscar(){

            if($this->tampada == true){
                echo "<p>Não posso rabiscar, pois a caneta está tampada</p>";
            }else echo "<p>Estou rabiscando...</p>";

        }

        function tampar(){
            $this->tampada = true;
        }

        function destampar(){
            $this->tampada = false;
        }

    }


