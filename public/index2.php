<?php

//A -> B -> C
class A
{
    public $a;
    protected $aPrivet;

    public function setA($value)
    {
        $this->a = $value;
    }

    public function setAPrivet($value)
    {
        $this->aPrivet = $value;
    }
}

class B extends A
{
    public $b;

    public function getAPrivet()
    {
        return $this->aPrivet;
    }
}

$model = new A();
$model2 = new B();
//$model2->setA('awdawdawd');
$model2->setAPrivet('awdawdawd');
var_dump($model2->getAPrivet());



