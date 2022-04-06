<?php

abstract class Animal
{
    protected $peso, $idade, $membros;
    protected abstract function emitirSom();
}