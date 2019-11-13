<?php

// ctrl shift i => psr2
class Profissao
{
    public $salario;
    public $cargo;
    public $tempoDeCasa;

    // CLASSE CONSTRUTORA
    public function __construct(string $cargo)
    {
        echo $cargo . " criado com sucesso.<br>";
    }

    public function __destruct(){
        echo "Objeto destruido com sucesso.<br>";
    }
}

$pedreiro = new Profissao('Pedreiro');
//unset($pedreiro);
echo "<pre>";
var_dump($pedreiro);
echo "</pre>";
