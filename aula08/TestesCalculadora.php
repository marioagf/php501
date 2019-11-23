<?php

require_once 'vendor/phpunit/phpunit/tests/unit/Framework/TestCaseTest.php';
use PHPUnit\Framework\TestCase;

require_once 'Calculadora.php';

$operacoes = new Calculadora;
$resultadoSoma = $operacoes->soma(1, 3);

class CalculadoraTeste extends Testcase
{
    public function testeSoma()
    {
        $operacoes = new Calculadora;
        $resultadoSoma = $operacoes->soma(1, 3);
        $this->assertEquals(4, $resultadoSoma, 'Erro na Soma');
    }
}
