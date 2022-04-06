<?php

require_once 'Animal.php';
require_once 'Mamifero.php';

class Lobo extends Mamifero
{
    public function emitirSom()
    {
        echo "<p>Auuuuu...</p>"; 
    }
}