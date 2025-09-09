<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
      <?php
    $total = $_POST["total"];
    $porciento = $total * 21/100;
    $totalfact = $total + $porciento;
      echo "<h1> El total de tu factura es: $totalfact € </h1>" 
    ?>
</body>
</html>