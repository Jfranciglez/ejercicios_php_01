<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-13</title>
</head>
<body>
    
    
    <h1>Factorial de un número</h1>
     <form action="index.php" method="post">
        <label for="numero">Introduzca un numero entero</label>
        <input type="number" name="num">
        <input type="submit" value="Aceptar">
    </form>
<?php
   if (isset($_POST['num'])){ 
        $num = $_POST['num'];

        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
           $factorial *= $i;
            
         

     }
      echo " El factorial de $num es: $factorial";

    }

?>


</body>
</html>