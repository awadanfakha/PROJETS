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
        <button>valider</button>
    </form>
    <?php
     $tableau_exercice8 = [
        "Awa" => ["Prénom" => "Awa", "Ville" => "Mbour", "Âge" => 30],
        "Adama" => ["Prénom" => "Adama", "Ville" => "DAKAR", "Âge" => 25],
        "Aliou" => ["Prénom" => "Aliou", "Ville" => "Louga", "Âge" => 20]
    ];
    
    $tableau_exercice9 = [
        "Alice" => ["Prénom" => "Alice", "Ville" => "Paris", "Âge" => 25],
        "Bob" => ["Prénom" => "Bob", "Ville" => "Lyon", "Âge" => 30],
        "Claire" => ["Prénom" => "Claire", "Ville" => "Marseille", "Âge" => 28]
    ];
    
    $exercices = [$tableau_exercice8, $tableau_exercice9];
    
    foreach ($exercices as $tableau) {
        foreach ($tableau as $nom => $infos) {
            echo "Nom : " . $nom . "<br>";
            while ($i = 0; $i < count($infos); $i++) {
                echo key($infos) . " : " . current($infos) . "<br>";
                next($infos);
            }
            echo "<br>";
        }
        echo "<br>";
    }
</body>
</html>
?>