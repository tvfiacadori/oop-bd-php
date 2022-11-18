<?php
// Fonction permettant de charger automatiquement les classes nécessaires
spl_autoload_register(function ($class) {
    include $class . '.class.php';
});
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Génération de formulaire</title>
</head>

<body>
    <?php

    // On crée un nouvel objet formulaire
    $formulaire = new Form("test", "post", $_SERVER['PHP_SELF']);


    $formulaire->ajouterChamp("text", "nom", "Votre nom");
    $formulaire->ajouterChamp("number", "age", "Votre âge");
    $formulaire->ajouterChamp("submit", "", "");

    $formulaire->generer();

    if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['age']) && !empty($_POST['age'])) {
        echo "<p>Vous vous appelez " . $_POST['nom'] . " et vous avez " . $_POST['age'] . " ans</p>";
    }

    ?>
</body>

</html>