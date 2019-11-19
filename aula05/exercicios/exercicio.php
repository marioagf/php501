<?php

require "exercicioInterface.php";

class Objeto implements ObjetoInterface
{
    public function __toString()
    {
        echo "Sendo convertido para string.<br>";
    }
    public function __invoke()
    {
        echo "Sendo chamado com metodo.<br>";
    }
    public function __set($attr, $val)
    {
        echo "Atribuindo valor ao atributo '{$attr}': {$val}.<br>";
    }
    public function __get($attr)
    {
        echo "Buscando valor da atributo '{$attr}'.<br>";
    }
    public function __call($method, $args)
    {
        if (method_exists(__CLASS__, $method)) {
            echo "Rotina para chamar metodo.<br>";
            return $this->$method(implode($args));
        } else {
            echo "Mensagem de metodo inexistente.<br>";
        }
    }
    public static function __callStatic($method, $args)
    {
        if (method_exists(__CLASS__, $method)) {
            echo "Rotina para chamar metodo estatico.<br>";
            return self::$method(implode($args));
        } else {
            echo "Mensagem de metodo estatico inexistente.<br>";
        }
    }

    public function metodo()
    {
        echo "Metodo sendo chamado.<br>";
    }
}

$obj = new Objeto;
$obj->metodo();
Objeto::metodo();
