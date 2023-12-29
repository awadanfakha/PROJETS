<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somme de ses diviseurs</title>
</head>
<body>
form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php

</body>
</html>// Saisie du nombre au clavier
$nombre = readline("Entrez un nombre : ");

$nombre = intval($nombre);

$sommeDiviseurs = 0;

for ($i = 1; $i <= $nombre / 2; $i++) {
    if ($nombre % $i === 0) {
        $sommeDiviseurs += $i;
    }
}

if ($sommeDiviseurs === $nombre) {
    echo "$nombre est un nombre parfait.";
} else {
    echo "$nombre n'est pas un nombre parfait.";
}
?>