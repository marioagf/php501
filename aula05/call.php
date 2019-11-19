<?php

class TesteMetodo
{
    public function __call(string $metodo, array $args)
    {
        if (method_exists(__CLASS__, $metodo)) {
            echo "Chamando Metodo<br>";
            return $this->$metodo(implode($args));
        } else {
            echo "Impossivel chamar metodo<br>";
        }
    }

    public static function __callStatic(string $metodo, array $args)
    {
        if (method_exists(__CLASS__, $metodo)) {
            echo "Chamando Metodo<br>";
            return self::$metodo(implode($args));
        } else {
            echo "Impossivel chamar metodo<br>";
        }
    }

    public static function mostraMensagem(){
        echo "Em execucao<br>";
    }
}

$obj = new TesteMetodo;
$obj->mostraMensagem();

TesteMetodo::mostraMensagem();