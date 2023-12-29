<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sinusAngleConverti </title>
</head>
<body>
<form action="" method="POST">
        <input type="text" name="number" id="number">
        <button>valider</button>
    </form>
    <?php 
function sinusAngle($angle, $unite = 'r') {
    switch(strtolower($unite)) {
        case 'r': // Radian
            return sin($angle);
            break;
        case 'd': // Degré
            $angle_en_radian = deg2rad($angle);
            return sin($angle_en_radian);
            break;
        case 'g': // Grade
            $angle_en_radian = ($angle / 200) * M_PI;
            return sin($angle_en_radian);
            break;
        default:
            return "Unité non valide";
    }
}
</body>
</html>
?>