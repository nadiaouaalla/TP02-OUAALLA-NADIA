// conditions et notes
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Conditions</title>
</head>
<body>

    <h1>Exercice 5 : Évaluation des notes</h1>

    <?php
    // Déclaration de la moyenne
    $moyenne = 14;

    // Vérification de la note
    if ($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } elseif ($moyenne < 10) {
        echo "<p>Non validé</p>";
    } elseif ($moyenne < 12) {
        echo "<p>Passable</p>";
    } elseif ($moyenne < 14) {
        echo "<p>Assez bien</p>";
    } elseif ($moyenne < 16) {
        echo "<p>Bien</p>";
    } else {
        echo "<p>Très bien</p>";
    }
    ?>

</body>
</html>