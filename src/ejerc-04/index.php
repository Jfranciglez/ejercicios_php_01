<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-04</title>
    <link rel="stylesheet" href="/src/style.css">
</head>
<body>
  
    <form action="index.php" method="post">
        <label for="hora">Escriba la hora</label>
        <input type="number" name="hora">
        <input type="submit" value="Aceptar">
    </form>
    <?php
     if (isset($_POST['hora'])){  
        $hora = $_POST["hora"];

       if ($hora >= 6 && ($hora <= 12)){
        echo "Buenos días <br><br>";

       } elseif ($hora >= 13 && ($hora <= 20)){
         echo "Buenas tardes <br><br>";

       } else {
         echo "Buenas noches <br><br>";

       }
     }
     ?>
     
</body>
</html>