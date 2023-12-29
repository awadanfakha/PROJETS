<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
    $nombre = 15; // Remplacez ici par le nombre que vous voulez tester 
    if ($nombre % 3 == 0 && $num % 5 == 0){
        echo " Le nombre est a la fois un muliple de 3 et 5.";
    } else {
         echo " Le nombre n'est pas un multiple de 3 et 5.";
    }
    ?>
</body>
</html>