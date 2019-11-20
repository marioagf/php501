<?php

require_once "Pessoa.php";
class Funcionario extends pessoa
{
    public $setor;
    public $cargo;

    public function gerarLog(string $datahora, string $mensagem)
    {
        echo "<kbd>LOG: {$datahora} {$mensagem}</kbd>";
    }
}

$funcionario = new Funcionario();
$funcionario->gerarLog("2019-11-12 21:00:00", "Teste");
