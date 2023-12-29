<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AffichageSuiteNumeriqueRepetee</title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button> 
        </form>
        <?php 

</body>for ($i = 1; $i <= 10; $i++) {
    $output = '';
    for ($j = 1; $j <= $i; $j++) {
        $output .= $i;
    }
    echo $output . "<br>";
}
</html>
?>