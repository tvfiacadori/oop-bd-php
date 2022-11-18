<?php

class Champ
{

private string $inputType;
private string $inputName;
private string $label;

    public function __construct(string $inputType, string $inputName, string $label)
    {
      $this->inputType = $inputType;
      $this->inputName = $inputName;
      $this->label = $label;

    }

    private function genererLabel(): string
    {
        return"<label for='$this->inputName'> $this->label</label>";
    }

    private function genererInput(): string
    {
        return"<input type='$this->inputType' name='$this->inputName'>";
    }

    public function genererChamp(): string
    {
      $champ = "";

    if ($this->inputType !== "submit") {
        $champ .= $this->genererLabel();
      }
  
      $champ .= $this->genererInput();
      return $champ; 
    }
}