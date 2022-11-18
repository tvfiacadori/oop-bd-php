<?php

// abstract 
// abstract class ParentClass
// {
//   abstract public function someMethod1();
//   abstract public function someMethod2($name,$color);
//   abstract public function someMethod3() : string;
// }

// Parent class

abstract class Car
{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  abstract public function intro(): string;
}

// Child classes

class Audi extends Car
{
  public function intro(): string
  {
    return " Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car
{
  public function intro(): string
  {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

class Citroen extends Car
{
  public function intro(): string
  {
    return "French extravagance! I'm a $this->name!";
  }
}

$audi = new audi('Audi');
echo $audi->intro();
echo "<br>";

$volvo = new volvo('Volvo');
echo $volvo->intro();
echo "<br>";

$citroen = new citroen('Citroen');
echo $citroen->intro();

echo "<br>";

abstract class ParentClass
{
  //abstract class com mais argumentos
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass
{
  public function prefixName($name)
  {
    if ($name == "Thiago Fiacadori") {
      $prefix = "Irmão: ";
    } elseif ($name == "Helio Fiacadori") {
      $prefix = "Pai: ";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}


$class = new ChildClass;
echo $class->prefixName("Thiago Fiacadori");
echo "<br>";
echo $class->prefixName("Helio Fiacadori");

echo "<br>";