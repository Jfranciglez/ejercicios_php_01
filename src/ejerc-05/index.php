<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-05</title>
    <link rel="stylesheet" href="/src/style.css">
</head>
<body>
  
    <form action="index.php" method="post">
        <label for="horas">Escriba las horas trabajadas</label>
        <input type="number" name="horas">
        <input type="submit" value="Aceptar">
    </form>
    <?php
     if (isset($_POST['horas'])){  
        $horas = $_POST["horas"];
        $cobra = 0;
        
      

        if ($horas <= 40 ){
        $cobra = 12;
        $salario = $cobra * $horas;
         echo "Su salario semanal es de $salario . <br><br>";


       } else {
        $cobra = 16;
        $salario = $cobra * $horas;
          echo "Su salario semanal es de $salario . <br><br>";

       }
     }
     ?>
     
</body>
</html>