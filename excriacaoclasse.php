<?php

class Cachorro{
    public $nome = "Sofia";
    public $idade = 12;

    public function mostraIdade(){
        echo $idade;
    }

    public function mostraNome(){
        echo $nome;
    }

    public function late(){
        echo "auaua";
    }
}

$dog = new Cachorro();
$dog->late();