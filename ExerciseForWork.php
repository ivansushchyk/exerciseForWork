<?php

class Animal
{

    public $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {

        return $this->name;
    }
}


class Cat extends Animal
{
    public function meow()
    {

        return "Cat {$this->name} is saying meow.";
    }
}

$cat = new Cat('garfield');


echo($cat->meow());