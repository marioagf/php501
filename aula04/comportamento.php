<?php

class VirarString
{
    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return 'nao pode passar string<br>';
    }

    public function __invoke()
    {
        return 'nao pode dar invoke<br>';
    }
}

$obj = new VirarString('oi');
echo $obj;
echo $obj(34);
