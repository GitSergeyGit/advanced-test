<?php

class Car
{
    private $color;

    public function __construct($color = '') {
        if($color){
            $this->setColor('awdawdaw');
        }
        $this->setColor($color);
    }
    private function setColor($value){
        $this->color = $value;
    }
    public function getColor(){
        return $this->color;
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