<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>majPremierCaractere </title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php 
    function formatageChaines(&$tab_chaines) {
        $tab_chaines = array_map(function($chaine) {
            return ucfirst(strtolower($chaine));
        }, $tab_chaines);
    }
</body>
</html>
?>