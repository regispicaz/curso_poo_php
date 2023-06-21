<?php
    class Carro{
        var $marca;
        var $modelo;
        var $cor;
        var $ano;
        var $passeio;


        function passear(){
            if ($this->passeio == true){
                print "Vamos passear";
            }else print "Vamos transportar";
        }



    }



?>