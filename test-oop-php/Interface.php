<?php

//Interface definição

interface Animal
{
  public function makeSound();
}

//Class definições

class Cat implements Animal
{
  public function makeSound()
  {
    echo "Miau ";
  }
}

class Dog implements Animal
{
  public function makeSound()
  {
    echo "Au au ";
  }
}

class Mouse implements Animal
{
  public function makeSound()
  {
    echo "Squeal ";
  }
}


//Criação de lista dos animais

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat,$dog, $mouse);

// var_dump($animals);

// barulho dos animais

foreach($animals as $animal)
{
  $animal->makeSound();
}