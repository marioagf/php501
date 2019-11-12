<?php

/*
    Classe, metodos e atributos
*/

class NomeDaClasse{
    /*Atributos*/
    public $atributo1 = 1;
    private $atributo2;
    protected $atributo3;
    const ATRIBUTOCONSTANTE = "X";

    /*Metodos*/
    public function metodoDaClasse(){
        echo "MEDASUISUICAO";
    }
}

$objeto = new NomeDaClasse();

$objeto->metodoDaClasse();