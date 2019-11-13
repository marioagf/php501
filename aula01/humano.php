<?php

class Humano{

    public $idade;

    public function __construct($idadeObj){
        $this->idade = $idadeObj;
    }

    public function andar(){
        echo "anda e tem " . $this->idade;
    }

    public function falar(){
        echo "fala";
    }
    
}

$individuo1 = new Humano(13);
$individuo2 = new Humano(15);

$individuo1->andar();
//$individuo1->falar();