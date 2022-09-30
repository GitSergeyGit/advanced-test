<?php

interface Animal
{
    public function speak();
}

interface Pet
{
    public function move();
}

abstract class Animal2 implements Animal, Pet
{
    abstract public function speak();

    public function move()
    {
        echo '11111111';
    }
}

class Cat extends Animal2
{
    public function speak()
    {
        echo '2222222';
    }

}
//
//class Parrot extends Animal
//{
//    public function speak()
//    {
//        echo '2222222';
//    }
//}
//
//class Dog extends Animal
//{
//    public function speak()
//    {
//        echo '33333333';
//    }
//}