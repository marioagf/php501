<?php

function __autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once $arquivo;
}

$funcionario = new Funcionario();
$funcionario->nome = "Thiago";
$funcionario->sobrenome = "TMS";
$funcionario->dataNascimento = "1989-01-01";
$funcionario->sexo = "M";
$funcionario->cargo = "Crossfiteiro";
$funcionario->setor = "Birl";
$funcionario->AttrCriadoApenasParaEsseObjeto = "Novo Atributo";

echo "<pre>";
var_dump($funcionario);

echo "Nome Completo: {$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->nome = "Mario";
$cliente->sobrenome = "Filho";
$cliente->dataNascimento = "1989-11-10";
$cliente->sexo = "M";
$cliente->rg = "436101336";
$cliente->cpf = "38390738805";

echo "<hr>";
var_dump($cliente);
echo "Nome Completo: {$cliente->nomeCompleto()}";

$estag = new Estagiario();
$estag->plr = 1500;

echo "<hr>";
var_dump($estag);

$pessoaAbstrata = new PessoaAbstrata();
echo "<hr>";
var_dump($pessoaAbstrata);


