<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button> 
        </form>
        <?php 
    // Initialisation des variables
    $prix_ht = isset($_POST['prix_ht']) ? $_POST['prix_ht'] : '';
    $taux_tva = isset($_POST['taux_tva']) ? $_POST['taux_tva'] : '';
    $tva = 0;
    $prix_ttc = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($prix_ht) && !empty($taux_tva)) {
            $tva = $prix_ht * ($taux_tva / 100);
            $prix_ttc = $prix_ht + $tva;
        }
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Prix HT: <input type="text" name="prix_ht" value="<?php echo $prix_ht;?>"><br><br>
        Taux de TVA (%): <input type="text" name="taux_tva" value="<?php echo $taux_tva;?>"><br><br>
        <input type="submit" name="submit" value="Calculer">
    </form>
    
    <?php
    if ($tva > 0 && $prix_ttc > 0) {
        echo "<h2>Résultats :</h2>";
        echo "Montant de la TVA : " . number_format($tva, 2) . " €<br>";
        echo "Prix TTC : " . number_format($prix_ttc, 2) . " €<br>";
    }
    ?>
    
    </body>
    </html>
</body>
</html>