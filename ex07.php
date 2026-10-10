// boucles for
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>

    <h1>Exercice 7 : Les boucles for</h1>

    <?php
    // Partie 1 : Table de multiplication
    $nombre = 7;

    echo "<h2>Table de multiplication de $nombre</h2>";

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        echo "$nombre × $i = $resultat<br>";
    }

    // Partie 2 : Pyramide d'étoiles
    echo "<h2>Pyramide d'étoiles</h2>";
    echo "<pre>";

    for ($ligne = 1; $ligne <= 6; $ligne++) {
        for ($colonne = 1; $colonne <= $ligne; $colonne++) {
            echo "* ";
        }
        echo "\n";
    }

    echo "</pre>";
    ?>

</body>
</html>