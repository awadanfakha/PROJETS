<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulation Adresse Client</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['code_postal'];

    echo "<h2>Informations de l'adresse client :</h2>";
    echo "<p>Nom : $nom</p>";
    echo "<p>Prénom : $prenom</p>";
    echo "<p>Adresse : $adresse</p>";
    echo "<p>Ville : $ville</p>";
    echo "<p>Code Postal : $codePostal</p>";
    ?>
</body>
</html>