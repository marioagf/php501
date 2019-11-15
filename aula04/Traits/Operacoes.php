<?php
trait Operacoes
{
    public function somar(float $n1, float $n2): float
    {
        return $n1 + $n2;
    }

    public function subtrair(float $n1, float $n2): float
    {
        return $n1 - $n2;
    }

    public function multiplicar(float $n1, float $n2): float
    {
        return $n1 * $n2;
    }

    public function dividir(float $n1, float $n2): float
    {
        return $n1 / $n2;
    }
}

trait A
{
    public function a()
    {
        echo "<p>FUNCAO A - TRAIT A</p>";
    }
    public function b()
    {
        echo "<p>FUNCAO B - TRAIT A</p>";
    }
}

trait B
{
    public function a()
    {
        echo "<p>FUNCAO A - TRAIT B</p>";
    }
    public function b()
    {
        echo "<p>FUNCAO B - TRAIT B</p>";
    }
    public function c()
    {
        echo "<p>FUNCAO C - TRAIT B</p>";
    }
}

var_dump((new class
{
    use A, B {
        B::b insteadof A;
        B::a insteadof A;
        A::a as metodoComAlias;
    }
})->metodoComAlias());

trait C
{
    use A, B {
        B::b insteadof A;
        B::a insteadof A;
        A::a as metodoComAlias;
    }
}

var_dump((new class{
    use C;
})->metodoComAlias());
