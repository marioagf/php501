<?php

class MinhaClasse
{
    public function __construct()
    {}

    public function MeuPublico()
    {}

    protected function MeuProtegido()
    {}

    private function MeuPrivado()
    {}

    // quando nao passo visibilidade, eh public
    function foo()
    {
        $this->MeuPublico();
        $this->MeuProtegido();
        $this->MeuPrivado();
    }
}

$obj = new MinhaClasse();
$obj->MeuPublico();
//$obj->MeuProtegido();
//$obj->MeuPrivado();
$obj->foo();

class MinhaClasse2 extends MinhaClasse
{
    function foo2()
    {
        $this->MeuPublico();
        $this->MeuProtegido();
        $this->MeuPrivado();
    }
}

$obj2 = new MinhaClasse2();
$obj2->MeuPublico();
//$obj2->MeuProtegido();
//$obj2->MeuPrivado();
$obj2->foo2();
