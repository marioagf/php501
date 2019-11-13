<?php

class Funcionario extends Pessoa{
    public $cargo;
    public $setor;
    private $plr;
    
    private function fenomenal(){
        echo "<p>Fenomenal</p>";
    }
    protected function abacate(){
        echo "<p>Abacate</p>";
    }
}