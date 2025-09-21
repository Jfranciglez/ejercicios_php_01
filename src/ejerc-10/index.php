<?php
session_start();

if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-10</title>
</head>

<body>
   

    <form action="index.php" method="post">
        <label for="numero">Introduzca un número </label>
        <input type="number" name="numeros">
        <input type="submit" value="Aceptar">
    </form>

<?php
if (isset($_SESSION['numeros'])) {
    $numero = $_POST['numeros'];
    

    if ($numero >= 0) {
        // Agregar número al array de sesión
        $_SESSION['numeros'][] = $numero;
    } else {
        
        $cantidad = count($_SESSION['numeros']);

        if ($cantidad > 0) {
            $suma = array_sum($_SESSION['numeros']);
            $media = $suma / $cantidad;
            echo "<h3>Media de los $cantidad números introducidos es: $media</h3>";
        } else {
            echo "<h3>No se introdujeron números válidos.</h3>";
        }
    }
}

if (!empty($_SESSION['numeros'])) {
   echo "<p>Números introducidos: " . implode(", ", $_SESSION['numeros']) . "</p>";
}

    ?>
    <br>
    <a href="reset.php"><button>Reiniciar</button></a>
 
 </div>
</body>

</html>