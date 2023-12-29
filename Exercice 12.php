<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Données Client</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
    $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
    $code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : 
    
    echo "<h2>Récapitulatif Adresse Client :</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
    echo "<tr><td>$nom</td><td>$prenom</td><td>$adresse</td><td>$ville</td><td>$code_postal</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
