<?php

interface ObjetoInterface
{
    public function __toString();
    public function __invoke();
    public function __set($attr, $val);
    public function __get($attr);
    public function __call($method, $args);
    public static function __callStatic($method, $args);
    public function metodo();
}
