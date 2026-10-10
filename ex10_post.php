<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>

    <h1>Résultat du formulaire POST</h1>

    <?php
    if (
        isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])
        && trim($_POST["nom"]) !== ""
        && trim($_POST["prenom"]) !== ""
        && trim($_POST["groupe"]) !== ""
    ) {
        $nom = htmlspecialchars(trim($_POST["nom"]), ENT_QUOTES, "UTF-8");
        $prenom = htmlspecialchars(trim($_POST["prenom"]), ENT_QUOTES, "UTF-8");
        $groupe = htmlspecialchars(trim($_POST["groupe"]), ENT_QUOTES, "UTF-8");

        echo "<p>Nom : $nom</p>";
        echo "<p>Prénom : $prenom</p>";
        echo "<p>Groupe : $groupe</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
    }
    ?>

    <p><a href="ex10_post.html">Retour au formulaire POST</a></p>

</body>
</html>