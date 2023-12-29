<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>Afffichage avec la boucle for</button>
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
            "ville" => "Louga",
            "âge" => 20
        )
    );
    
    // Affichage des informations sur les personnes (exercice 9) avec une boucle foreach
    foreach ($personnesExercice9 as $nom => $infos) {
        echo "Nom : $nom\n";
        echo "Prénom : " . $infos["prénom"] . "\n";
        echo "Ville : " . $infos["ville"] . "\n";
        echo "Âge : " . $infos["âge"] . "\n\n";
    }
</body>
</html>
?>