 <?php

class Form
{

  public string $nameVar;
  public string $methodVar;
  public string $actionVar;
  public array $tableFiel;

  public function __construct(string $nameVar, string $methodVar, string $actionVar)

  {
    $this->nameVar = $nameVar;
    $this->methodVar = $methodVar;
    $this->actionVar = $actionVar;
    $this->tableField = [];
  }

  public function addField(string $inputType, string $inputName, string $label)
  {
    $input = new Field($inputType, $inputName, $label);
    $this->tableField[] = $input->generateField();
    // var_dump($this->tableFiel);
  }

  public function generate(): void
  {
    echo "<form name ='$this->nameVar' method='$this->methodVar' action='$this->actionVar'>";

    foreach ($this->tableField as $field) {
      echo "<p>";
      echo $field;
      echo "</p>";
    }

    echo "</form>";
  }
}
?> 