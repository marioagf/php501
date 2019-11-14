<?php

interface iTemplate
{
    public function setVariable(string $nome, $var);
    public function getHTML($template) : string;
}
