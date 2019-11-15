<?php

var_dump((new class
{
    public function soma($n1, $n2) : string
    {
        return $n1 + $n2;
    }
})->soma(5, 10));

