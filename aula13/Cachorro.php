<?php

require_once 'Animal.php';
require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    public function emitirSom()
    {
        echo "<p>Au au au ...</p>"; 
    }

    function reagirFrase($frase)
    {
        if ($frase == "Toma comida" || $frase == "Olá")
        {
            echo "<p>Abanar e latir</p>";
        }
        else
        {
            echo "<p>Rosnar</p>";
        }
    }

    function reagirHoraMin($hora, $min)
    {
        if ($hora > 12)
        {
            echo "Abanar";
        }
        elseif ($hora >= 18)
        {
            echo "Ignora";
        }
        else
        {
            echo"Abanar e latir";
        }
    }

    function reagirDono($dono)
    {
        if($dono == true)
        {
            echo "Abanar";
        }
        else
        {
            echo "Rosnar e Latir";
        }
    }

    function reagirIdadePeso($idade, $peso)
    {
        if($idade < 5)
        {
            if($peso<10)
            {
                echo"Abanar";
            }
            else
            {
                echo "Latir";
            }
        }
        else
        {
            if($peso<10)
            {
                echo"Rosnar";
            }
            else
            {
                echo"Ignorar";
            }
        }
    }


}