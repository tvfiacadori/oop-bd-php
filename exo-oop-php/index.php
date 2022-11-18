<?php

spl_autoload_register(function ($class) {
  include $class . '.class.php';
})
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">                           
  <title>Exo Form with OOP</title>
</head>

<body>
  <?php
  $form = new Form("test", "post", $_SERVER['PHP_SELF']);

  $form->addField("text", "name", "Your name ");
  $form->addField("number", "age", "Your age ");
  $form->addField("submit", "", "");
  $form->generate();

  if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['age']) && !empty($_POST['age'])) 
  {
    echo"<p>Your name is " . $_POST['name']. " and you are " .$_POST['age'] . " old</p>";
  }

  ?>
</body>

</html>