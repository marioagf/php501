<?php

require_once 'vendor/autoload.php';
require_once 'Calculadora.php';

use PHPUnit\Framework\TestCase;


$operacoes = new Calculadora;
$resultadoSoma = $operacoes->soma(1, 3);

class CalculadoraTeste extends Testcase
{
    public function testeSoma()
    {
        $operacoes = new Calculadora;
        $resultadoSoma = $operacoes->soma(1, 3);
        $this->assertEquals(4, $resultadoSoma, 'Erro na Soma');
        $this->assertEquals(5, $operacoes->soma(3, 2), 'Erro na Soma');
        $this->assertEquals(6, $operacoes->soma(4, 2), 'Erro na Soma');
        $this->assertEquals(7, $operacoes->soma(5, 2), 'Erro na Soma');
        $this->assertEquals(8, $operacoes->soma(6, 2), 'Erro na Soma');
    }

    public function testeSubt()
    {
        $operacoes = new Calculadora;
        $this->assertEquals(4, $operacoes->subt(6, 2), 'Erro na Subt');
    }
}
