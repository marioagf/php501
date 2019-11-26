<?php

use PHPUnit\Framework\TestCase;

class AlgumaClasse
{
    public function faz()
    {
        // implementar
    }

    public function retornaNumero(){
        return 10;
    }
}

class Mock extends TestCase
{
    public function testeMock()
    {
        $duble = $this->createMock(AlgumaClasse::class);
        $duble->method('faz')->willReturn('foo');
        $this->assertSame('foo', $duble->faz(), 'nao fez');

        $duble->method('retornaNumero')->willReturn(10);
        $this->assertSame(10, $duble->retornaNumero(), 'nao retornou');
    }
}
