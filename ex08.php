<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles</title>
</head>
<body>

    <h1>Exercice 8 : Les boucles</h1>

    <?php
    // Partie 1 : Nombres pairs de 0 à 20
    echo "<h2>1. Nombres pairs</h2>";

    $nombre = 0;

    while ($nombre <= 20) {
        if ($nombre == 10) {
            echo "<strong>$nombre</strong><br>";
        } else {
            echo "$nombre<br>";
        }

        $nombre += 2;
    }

    // Partie 2 : Comparaison entre while et do...while
    echo "<h2>2. Comparaison des boucles</h2>";

    $compteur = 5;
    $iterationsWhile = 0;

    while ($compteur < 5) {
        $iterationsWhile++;
        $compteur++;
    }

    echo "<p>Nombre d'exécutions de while : $iterationsWhile</p>";

    $compteur = 5;
    $iterationsDoWhile = 0;

    do {
        $iterationsDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "<p>Nombre d'exécutions de do...while : $iterationsDoWhile</p>";

    // Partie 3 : Utilisation de continue et break
    echo "<h2>3. Continue et break</h2>";

    $compteur = 1;

    while ($compteur <= 20) {
        if ($compteur == 16) {
            break;
        }

        if ($compteur % 3 == 0) {
            $compteur++;
            continue;
        }

        echo "$compteur ";
        $compteur++;
    }
    ?>

</body>
</html>