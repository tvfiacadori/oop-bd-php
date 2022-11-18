<?php

class Field
{

  private string $inputType;
  private string $inputName;
  private string $label;

  public function __construct(string $inputType, string $inputName, string $label)
  {
    $this->inputType = $inputType;
    $this->inputName = $inputName;
    $this->label = $label;

    // var_dump($inputType, $inputName, $label);
  }


  private function generateLabel(): string
  {
    return "<label for='$this->inputName'> $this->label</label>";
  }

  private function generateInput(): string
  {
    return "<input type='$this->inputType' id='$this->inputName' name='$this->inputName'>";
  }

  public function generateField(): string
  {
    $field = "";

    if ($this->inputType !== "submit") {
      $field .= $this->generateLabel();
    }

    $field .= $this->generateInput();
    return $field;
  }
}
