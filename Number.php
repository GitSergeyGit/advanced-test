<?php

class Number
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    private function validate($value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('Невалідне значення');
        }
        if ($value > 0 && $value < 100) {
            throw new InvalidArgumentException('діапазон');
        }
    }

    private function setA($a)
    {
        $this->validate($a);
        $this->a = $a;
    }

    private function setB($b)
    {
        $this->validate($b);
        $this->b = $b;
    }

    public function sum(Number $objectNumber)
    {
        return new Number($this->a + $objectNumber->getA(), $this->b + $objectNumber->getB());
    }
}

$model = new Number(10);
$model1 = new Number(11);
$model3 = $model->sum($model1);
var_dump($model, $model1, $model3);
