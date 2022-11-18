<?php

class Fruit
{
  // Properties
  public $name;
  public $color;

  // try inheritance

  public function __construct($name, $color) 
  {
    $this->name = $name;
    $this->color = $color;
  }
    // try inheritance
  // protected function intro()
    //substituindo metodos herdados
    public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }

  

  // Methods

  // function set_name($name)
  // {
  //   $this->name = $name;
  // }

  // function get_name()
  // {
  //   return $this->name;
  // }

  // function set_color($color)
  // {
  //   $this->color = $color;
  // }

  // function get_color()
  // {
  //   return $this->color;
  // }


  // Using __construct

  // function __construct($name, $color)
  // {
  //   $this->name = $name;
  //   $this->color = $color;
  // }

  // function get_name()
  // {
  //   return $this->name;
  // }

  // function get_color()
  // {
  //   return $this->color;
  // }


  //Using __destruct

//   function __construct ($name, $color)
//   {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function __destruct()
//   {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }

// $strawberry = new Fruit ("Strawberry", "red");
}
  // try inheritance

  //Strawberry is inherited from fruit

  // class Strawberry extends Fruit 
  // {
  //   public function message() 
  //   {
  //     echo "Am I a fruit or a berry?";
  //     echo "<br>";
  //     //Chama o método protegido de dentro da classe derivada
  //     $this->intro();
      
  //   }

  // }

  //substituindo metodos herdados

  class Strawberry extends Fruit
  {
    public $weight;
    public function __construct($name, $color, $weight)
    {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }

    public function intro() 
    {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }

  $strawberry = new Strawberry("Strawberry", "red", 50);
  // $strawberry->message();

  $strawberry->intro();
  echo "<br>";

  class Goodbye {
    const LEAVING_MSG = "Thanks for your msg";
    public function byebye() 
    {
      echo self::LEAVING_MSG;
    }
  }


  $goodbye = new Goodbye();
  $goodbye->byebye();

  // echo Goodbye ::LEAVING_MSG;

  echo "<br>";

