<?php

class MinhaExcecao extends Exception
{
    public function __construct($mensagem, $code = 0, Exception $previous = null)
    {
        parent::__construct($mensagem, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}";
    }

    public function customFunction()
    {
        echo "Funcao desse tipo de excecao<br>";
    }
}

class TesteException
{
    public function mensagem(string $msg) : string
    {
        if (empty($msg)) {
            throw new MinhaExcecao('Mensagem obrigatoria.<br>', 500);
        }
        return $msg;
    }
}

$teste = new TesteException;
try{
    echo $teste->mensagem('');
}
catch(MinhaExcecao $e){
    echo "Excecao: ", $e;
    $e->customFunction();
}