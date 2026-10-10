<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>

    <h1>Exercice 3 : Calcul du prix</h1>

    <?php
    // Déclaration des constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Déclaration des variables
    $prixUnitaireHT = 60;
    $quantite = 3;
    $fraisLivraison = 15;

    // Calcul du total hors taxes
    $totalHT = $prixUnitaireHT * $quantite;

    // Calcul de la TVA
    $montantTVA = $totalHT * TAUX_TVA / 100;

    // Calcul du total toutes taxes comprises
    $totalTTC = $totalHT + $montantTVA;

    // Ajout des frais de livraison
    $totalTTC += $fraisLivraison;

    // Affichage des résultats
    echo "<p>Prix unitaire HT : $prixUnitaireHT " . DEVISE . "</p>";
    echo "<p>Quantité : $quantite</p>";
    echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
    echo "<p>TVA (" . TAUX_TVA . "%) : $montantTVA " . DEVISE . "</p>";
    echo "<p>Total TTC avec livraison : $totalTTC " . DEVISE . "</p>";

    // Vérification de l'existence de la constante
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est définie.</p>";
    }
    ?>

</body>
</html>