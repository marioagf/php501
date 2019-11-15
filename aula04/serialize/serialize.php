<?php

class Funcionario
{
    public function oi()
    {
        echo "<hr>SALVE<br>";
    }

    public function __destruct(){
        echo "<br>Objeto destruido...<br>";
    }

    public function __sleep(){
        return ['nome', 'sobrenome'];
    }

    public function __wakeup(){
        $this->voltou = "RUSBE";
    }
}

$funcionario = new Funcionario;
$funcionario->nome = "Mario Augusto";
$funcionario->sobrenome = "Garcia Filho";
$funcionario->nasc = "1989-11-10";
$funcionario->sexo = 'M';
$funcionario->cargo = 'Cansado';
$funcionario->setor = 'Vida';

echo "<pre>";
var_dump($funcionario);

echo "<br>";
$serial = serialize($funcionario);
echo $serial;
unset($funcionario);

echo "<br><br>";
$funcionario = unserialize($serial);

$funcionario->oi();
var_dump($funcionario);
