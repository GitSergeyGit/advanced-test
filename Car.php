<?php

class Car
{
    private $color;
    private $engine;

    public function __construct($color, Engine $engine)
    {
        $this->setColor($color);
        $this->engine = $engine;
    }

    private function setColor($value)
    {
        $this->color = $value;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function random(Engine $engine)
    {
        if (!$this->engine->equals($engine)) {
//
        }
        return new self(rand(0, 255), $engine);
    }
}

class Engine
{
    public $property1;

    public function equals(Engine $engine)
    {
        return $this == $engine;
        ///
    }
}

//          | $model | $model1  |
// $color   |  red   |  white   |
// $name    |       bmw         |

$model = new Car();
var_dump($model->getName());

//$model = new Car('white');
//$model = new Car('red');

//$model::$name = 'bmw';
//var_dump($model::getName());
//Car::$name = 'str';
//var_dump(Car::getName());

//$model1 = new Car('white');
//$model1->color = '2222';

//$model1->engine = 2;
//var_dump($model1->getColor());
//var_dump($model1->color);

//$model = new Car();
//$model->setColor('white');
//var_dump($model);