<?php

require "Villes.php";

$ville = new Villes('Paris', 'Rhone');
$ville->get_ville('Lyon');
$ville->get_region('Rhone');
echo "The city " . $ville->get_ville();
echo " belongs to state " .  $ville->get_region();

echo "<br>";

$ville = new Villes('Paris', 'Paris');
$ville->get_ville('Paris');
$ville->get_region('Paris');
echo "The city " . $ville->get_ville();
echo " belongs to state " .  $ville->get_region();

echo "<br>";

$ville = new Villes('Marseille', 'Bouches-du-Rhône');
$ville->get_ville('Marseille');
$ville->get_region('Bouches-du-Rhône');
echo "The city " . $ville->get_ville();
echo " belongs to state " .  $ville->get_region();

echo "<br>";

$ville = new Villes('Bordeaux', 'Gironde');
$ville->get_ville('Bordeaux');
$ville->get_region('Gironde');
echo "The city " . $ville->get_ville();
echo " belongs to state " .  $ville->get_region();

?>

