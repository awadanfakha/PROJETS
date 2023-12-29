<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> affichageTableauMultidimensionnel</title>
</head>
<body>
<form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php 
      function afficherTableauMultidimensionnel($tableau) {
        echo "<table border='1'>";
        
        echo "<tr>";
        foreach (array_keys($tableau) as $key) {
            echo "<th>$key</th>";
        }
        echo "</tr>";
        
    
        $nbRows = count(current($tableau)); 
        for ($i = 0; $i < $nbRows; $i++) {
            echo "<tr>";
            foreach ($tableau as $value) {
                echo "<td>" . ($value[$i] ?? "") . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
</body>
</html>
?>