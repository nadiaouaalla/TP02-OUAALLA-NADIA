// switch et mois
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch</title>
</head>
<body>

    <h1>Exercice 6 : Les mois de l'année</h1>

    <?php
    // 1. Conversion du numéro en nom du mois
    $numeroMois = 3;

    echo "<h2>Test avec un numéro choisi</h2>";

    switch ($numeroMois) {
        case 1:
            $nomMois = "Janvier";
            break;
        case 2:
            $nomMois = "Février";
            break;
        case 3:
            $nomMois = "Mars";
            break;
        case 4:
            $nomMois = "Avril";
            break;
        case 5:
            $nomMois = "Mai";
            break;
        case 6:
            $nomMois = "Juin";
            break;
        case 7:
            $nomMois = "Juillet";
            break;
        case 8:
            $nomMois = "Août";
            break;
        case 9:
            $nomMois = "Septembre";
            break;
        case 10:
            $nomMois = "Octobre";
            break;
        case 11:
            $nomMois = "Novembre";
            break;
        case 12:
            $nomMois = "Décembre";
            break;
        default:
            $nomMois = "Numéro de mois invalide";
    }

    echo "<p>Numéro : $numeroMois</p>";
    echo "<p>Mois : $nomMois</p>";

    // 2. Affichage du mois actuel
    $moisActuel = (int) date("m");

    echo "<h2>Mois actuel</h2>";
    echo "<p>Numéro du mois actuel : $moisActuel</p>";

    switch ($moisActuel) {
        case 1:  $nomActuel = "Janvier"; break;
        case 2:  $nomActuel = "Février"; break;
        case 3:  $nomActuel = "Mars"; break;
        case 4:  $nomActuel = "Avril"; break;
        case 5:  $nomActuel = "Mai"; break;
        case 6:  $nomActuel = "Juin"; break;
        case 7:  $nomActuel = "Juillet"; break;
        case 8:  $nomActuel = "Août"; break;
        case 9:  $nomActuel = "Septembre"; break;
        case 10: $nomActuel = "Octobre"; break;
        case 11: $nomActuel = "Novembre"; break;
        case 12: $nomActuel = "Décembre"; break;
    }

    echo "<p>Nom du mois actuel : $nomActuel</p>";
    ?>

</body>
</html>