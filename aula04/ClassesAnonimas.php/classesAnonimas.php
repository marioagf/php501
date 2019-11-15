<?php

class SomeClass{
    private $numClass;
}
interface SomeInterface{}
trait SomeTrait{}

echo "<pre>";

var_dump(new class(10) extends SomeClass implements SomeInterface
{
    private $num;
    use SomeTrait;
    public function __construct($num)
    {
        $this->num = $num;
    }
});
echo "</pre>";
