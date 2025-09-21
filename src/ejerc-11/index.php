<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-11</title>
</head>

<body>
   
    <h1>Mostrar los N primeros términos de la serie de Fibonacci</h1>
    
    <form action="index.php" method="post">
        <label for="numero">Introduzca un número </label>
        <input type="number" name="n" min="1" required>
        <input type="submit" value="Aceptar">
    </form>

    <?php
    if (isset($_POST["n"])) {
        $n = $_POST["n"];

        if ($n <= 0) {
            echo "Ingresa un número mayor que 0.";
        } else {
            $fibonacci = [];

            for ($i = 0; $i < $n; $i++) {
                if ($i == 0) {
                    $fibonacci[] = 0;
                } elseif ($i == 1) {
                    $fibonacci[] = 1;
                } else {
                    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                }
            }

            
            echo "<h3>Los primeros $n términos de la serie de Fibonacci son:</h3>";
            echo implode(", ", $fibonacci);
        }
    }
    ?>
    
</body>

</html>