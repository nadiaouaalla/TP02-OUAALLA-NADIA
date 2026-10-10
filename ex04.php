// types et conversions
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types de données</title>
</head>
<body>

    <h1>Exercice 4 : Types et conversions</h1>

    <?php
    // 1. Déclaration des variables
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    echo "<h2>1. Types des variables</h2>";

    echo "<pre>";
    var_dump($entier);
    var_dump($chaine);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);
    echo "</pre>";

    // 2. Conversions de types
    echo "<h2>2. Conversions</h2>";

    $chaineEnEntier = (int) $chaine;
    $decimalEnEntier = (int) $decimal;
    $entierEnChaine = (string) $entier;

    echo "<pre>";
    var_dump($chaineEnEntier);
    var_dump($decimalEnEntier);
    var_dump($entierEnChaine);
    echo "</pre>";

    // 3. Affichage de true et false
    echo "<h2>3. Affichage de true et false</h2>";

    echo "echo true : ";
    echo true;
    echo "<br>";

    echo "echo false : ";
    echo false;
    echo "<br>";

    var_dump(true);
    var_dump(false);

    // 4. Conversion en booléen
    echo "<h2>4. Conversion en booléen</h2>";

    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);

    ?>
</body>
</html>