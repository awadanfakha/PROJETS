<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'action</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['action'])) {
            $choix = $_POST['action'];
            
            switch($choix) {
                case 'Vendre':
                    header("Location: page_vendre.php");
                    break;
                case 'Acheter':
                    header("Location: page_acheter.php");
                    break;
                case 'Louer':
                    header("Location: page_louer.php");
                    break;
                default:
                    // Redirection par défaut ou traitement supplémentaire si nécessaire
                    break;
            }
        }
    }
    ?>
    
    </body>
    </html>
</body>
</html>