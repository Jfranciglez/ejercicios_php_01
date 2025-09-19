<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-06</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="dia">Escriba su dia de nacimiento</label>
        <input type="number" name="dia">
        <label for="mes">Escriba su mes de nacimiento</label>
        <input type="number" name="mes">
        <input type="submit" value="Aceptar">
    </form>

    <?php
     if (isset($_POST['dia'])){  

        $dia = $_POST["dia"];
        $mes = $_POST["mes"];

    
        switch ($mes) {
            case 1:
                if ($dia <= 19) {
                    $signo = "Capricornio";
                } else {
                    $signo = "Acuario";
                }
                break;
            case 2:
                if ($dia <= 18) {
                    $signo = "Acuario";
                } else {
                    $signo = "Piscis";
                }
                break;
            case 3:
                if ($dia <= 20) {
                    $signo = "Piscis";
                } else {
                    $signo = "Aries";
                }
                break;
            case 4:
                if ($dia <= 19) {
                    $signo = "Aries";
                } else {
                    $signo = "Tauro";
                }
                break;
            case 5:
                if ($dia <= 20) {
                    $signo = "Tauro";
                } else {
                    $signo = "Géminis";
                }
                break;
            case 6:
                if ($dia <= 20) {
                    $signo = "Géminis";
                } else {
                    $signo = "Cáncer";
                }
                break;
            case 7:
                if ($dia <= 22) {
                    $signo = "Cáncer";
                } else {
                    $signo = "Leo";
                }
                break;
            case 8:
                if ($dia <= 22) {
                    $signo = "Leo";
                } else {
                    $signo = "Virgo";
                }
                break;
            case 9:
                if ($dia <= 22) {
                    $signo = "Virgo";
                } else {
                    $signo = "Libra";
                }
                break;
            case 10:
                if ($dia <= 22) {
                    $signo = "Libra";
                } else {
                    $signo = "Escorpio";
                }
                break;
            case 11:
                if ($dia <= 21) {
                    $signo = "Escorpio";
                } else {
                    $signo = "Sagitario";
                }
                break;
            case 12:
                if ($dia <= 21) {
                    $signo = "Sagitario";
                } else {
                    $signo = "Capricornio";
                }
                break;
            default:
                $signo = "Fecha inválida";
        }

       echo "Tu signo zodiacal es: $signo"  ;
    }
?>

    
</body>
</html>