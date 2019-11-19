<?php

class TestePropriedade
{
    protected $nome;

    public function __set($propriedade, $valor)
    {
        if (property_exists(__CLASS__, $propriedade)) {
            $this->$propriedade = $valor;
        } else {
            echo "Propriedade '{$propriedade}' inexistente.";
        }
    }
}

$obj = new TestePropriedade;
$obj->nome = "Mario";

class TestePropriedadeNovo
{
    protected $nome;
    protected $idade;
    protected $sobrenome;

    public function __construct(string $nome, int $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __set($propriedade, $valor)
    {
        if(property_exists(__CLASS__, $propriedade)){
            echo "Valor atribuido<br>";
            $this->$propriedade = $valor;
        }else{
            echo "PERMISSION DENIED TO CREATE ATTRIBUTES<br>";
        }
    }

    public function __get($propriedade){
        echo "Acessado attr {$propriedade}: {$this->$propriedade}<br>";
    }
}

$obj2 = new TestePropriedadeNovo("Mario", 29);
echo $obj2->nome;
$obj2->sobrenome = "Filho";