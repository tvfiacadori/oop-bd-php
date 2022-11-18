<?php

class Form
{

    public string $nameAttr;
    public string $methodAttr;
    public string $actionAttr;
    public array $tableChamp;

    public function __construct(string $nameAttr, string $methodAttr, string $actionAttr)
    {
        $this->nameAttr = $nameAttr;
        $this->methodAttr = $methodAttr;
        $this->actionAttr = $actionAttr;
        $this->tableChamp = [];
    }

    public function ajouterChamp(string $inputType, string $inputName, string $label): void
    {
        $input = new champ($inputType, $inputName, $label);
        $this->tableChamp[] = $input->genererChamp();
    }

    public function generer()
    {
        echo "<form name='$this->nameAttr' method='$this->methodAttr' action='$this->actionAttr'>";


        foreach ($this->tableChamp as $champ) {
            echo "<p>";
            echo $champ;
            echo "</p>";
        //    var_dump($this->tableChamp);
        }
         echo "</form>";
    }
}
