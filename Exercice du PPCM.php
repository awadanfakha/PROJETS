<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPCM</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
$tableau_exercice8 = [
    "Alice" => ["Prénom" => "Alice", "Ville" => "Paris", "Âge" => 25],
    "Bob" => ["Prénom" => "Bob", "Ville" => "Lyon", "Âge" => 30],
    "Claire" => ["Prénom" => "Claire", "Ville" => "Marseille", "Âge" => 28]
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
        for ($i = 0; $i < count($infos); $i++) {
            echo key($infos) . " : " . current($infos) . "<br>";
            next($infos);
        }
        echo "<br>";
    }
    echo "<br>";
}
    function trouverPPCM($a, $b) {
        $plusGrand = max($a, $b);
        $plusPetit = min($a, $b);
        $multiple = $plusGrand;
    
        while ($multiple % $plusPetit != 0) {
            $multiple += $plusGrand;
        }
    
        return $multiple;
    }
    
    $entier1 = readline("Entrez le premier entier : ");
    $entier2 = readline("Entrez le deuxième entier : ");
    
    $entier1 = intval($entier1);
    $entier2 = intval($entier2);
    
    // Calcul du PPCM
    $ppcm = trouverPPCM($entier1, $entier2);
    
    echo "Le PPCM de $entier1 et $entier2 est : $ppcm";
    ?>
</body>
</html>