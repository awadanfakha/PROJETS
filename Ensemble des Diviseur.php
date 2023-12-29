<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ensemble des diviseurs</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
$nombre = readline("Entrez un nombre : ");
$nombre = intval($nombre);

echo "Les diviseurs de $nombre sont : ";

for ($i = 1; $i <= $nombre; $i++) {
    if ($nombre % $i === 0) {
        echo "$i ";
    }
}
?>
>// Saisie du nombre au clavier
$nombre = readline("Entrez un nombre : ");

// Conversion de la chaîne en nombre
$nombre = intval($nombre);

$sommeDiviseurs = 0;

// Calcul de la somme des diviseurs propres
for ($i = 1; $i <= $nombre / 2; $i++) {
    if ($nombre % $i === 0) {
        $sommeDiviseurs += $i;
    }
}

// Vérification si le nombre est parfait ou non
if ($sommeDiviseurs === $nombre) {
    echo "$nombre est un nombre parfait.";
} else {
    echo "$nombre n'est pas un nombre parfait.";
}