<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabeleau Associatif</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
    $personnes = array(
        "AWA" => array(
            "prénom" => "AWA",
            "ville" => "Mbour",
            "âge" => 30
        ),
        "Adama" => array(
            "prénom" => "Adama",
            "ville" => "dakar",
            "âge" => 25
        ),
        "Aliou" => array(
            "prénom" => "Aliou",
            "ville" => "LOUGA",
            "âge" => 20
        )
    );
    
    // Accès aux données
    echo "Prénom de Awa: " . $personnes["Awa"]["prénom"] . "\n";
    echo "Ville de résidence de ALiou : " . $personnes["Adama"]["ville"] . "\n";
    echo "Âge de : " . $personnes["Aliou"]["âge"] . "\n";
    ?>
</body>
</html>
