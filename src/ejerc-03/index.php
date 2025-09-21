<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-03</title>
    <link rel="stylesheet" href="/src/style.css">
</head>
<body>
   
    <form action="index.php" method="post">
        <label for="altura">Escriba la altura</label>
        <input type="number" name="altura">
        <label for="radio">Escriba el radio</label>
        <input type="number" name="radio">
        <input type="submit" value="Aceptar">
    </form>
    <?php
     if (isset($_POST['altura'])){  
        $altura = $_POST["altura"];
        $radio = $_POST["radio"];
        $pi = M_PI;

    

        $volumen = (1/3 *  $pi) * $radio ** 2 * $altura;

        echo " El volumen del cono es: $volumen .";


     }


        ?>
         <br> <br>
     <a href="index.php"><button>Volver al inicio</button></a>
     <a href="index.html"><button>Página Principal</button></a>
   
</body>
</html>