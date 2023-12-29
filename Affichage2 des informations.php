<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage2 des information</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
    // Tableau multidimensionnel associatif des personnes (exercice 9)
    $personnesExercice9 = array(
        "Awa" => array(
            "prénom" => "Awa",
            "ville" => "Mbour",
            "âge" => 30
        ),
        "Adama" => array(
            "prénom" => "Adama",
            "ville" => "DAKAR",
            "âge" => 25
        ),
        "Aliou" => array(
            "prénom" => "Aliou",
            "ville" => "LOUGA",
            "âge" => 20
        )
    );
    
    // Affichage des informations sur les personnes (exercice 9) avec une boucle while
    reset($personnesExercice9);
    while ($personne = each($personnesExercice9)) {
        echo "Nom : " . $personne['key'] . "\n";
        echo "Prénom : " . $personne['value']['prénom'] . "\n";
        echo "Ville : " . $personne['value']['ville'] . "\n";
        echo "Âge : " . $personne['value']['âge'] . "\n\n";
    }
    ?>
</body>
</html>