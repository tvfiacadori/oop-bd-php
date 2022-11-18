<?php
require "Database.class.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connection BD</title>
</head>

<body>
  <?php

  $db = new TryConect\Database('villes_france');

  $departements = $db->query('SELECT * FROM departement');
  // $departements = $db->fetchData();

  // var_dump($departements);

  echo "</ul>";
  foreach ($departements as $departement) {
    $nomDepartement = $departement['departement_nom'];
    echo "<li>$nomDepartement</li>";
  }
  echo "</ul>";

  




  // var_dump($res->fetchALL(PDO::FETCH_OBJ));
  // $departements = $pdo->fetchData();
  // echo "<ul>";

  // foreach ($departements as $departement) {
  //     $nomDepartement = $departement['departement_nom'];
  //     echo "<li>$nomDepartement</li>";
  // }
  // echo "</ul>";

  ?>



</body>

</html>