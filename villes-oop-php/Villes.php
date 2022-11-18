<?php 

class Villes {

  public $ville;
  public $region;


  public function __construct($ville, $region) 
  {
    $this->ville = $ville;
    $this->region = $region;
  }

  function get_ville()
  {
    return $this->ville;
  }

  function get_region()
  {
    return $this->region;
  }
} 
