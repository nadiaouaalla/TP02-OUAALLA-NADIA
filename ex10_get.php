// resultat get
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>

    <h1>Résultat du formulaire GET</h1>

    <?php
    if (
        isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])
        && trim($_GET["nom"]) !== ""
        && trim($_GET["prenom"]) !== ""
        && trim($_GET["groupe"]) !== ""
    ) {
        $nom = htmlspecialchars(trim($_GET["nom"]), ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars(trim($_GET["prenom"]), ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars(trim($_GET["groupe"]), ENT_QUOTES, "UTF-8");

        echo "<p>Nom : $nom</p>";
        echo "<p>Prénom : $prenom</p>";
        echo "<p>Groupe : $groupe</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
    ?>

    <p><a href="ex10_get.html">Retour au formulaire GET</a></p>

</body>
</html>