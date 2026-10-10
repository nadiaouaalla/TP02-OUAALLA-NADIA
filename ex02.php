<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables PHP</title>
</head>
<body>

    <h1>Exercice 2 : Les variables</h1>

    <?php
    // Déclaration des variables
    $nom = "Ouaalla";
    $prenom = "Nadia";
    $age = 19;
    $formation = "Informatique";

    // Concaténation avec le point
    $presentation = "Je m'appelle " . $prenom . " " . $nom
                  . ", j'ai " . $age . " ans et je suis en "
                  . $formation . ".";

    echo "<p>$presentation</p>";

    // Ajout d'un texte avec .=
    $presentation .= " J'apprends PHP.";

    echo "<p>$presentation</p>";

    // Les noms des variables sont sensibles à la casse
    $note = 12;
    $Note = 16;

    echo "<p>note = " . $note . "</p>";
    echo "<p>Note = " . $Note . "</p>";
    ?>

</body>
</html>