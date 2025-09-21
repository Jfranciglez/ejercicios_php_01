<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-07</title>
    <link rel="stylesheet" href="/src/style.css">
</head>
<body>
    
    <h1>¿Quieres saber cuántos segundos faltan para medianoche🤔?</h1>
    <form action="index.php" method="post">
        <label for="hora">Introduzca una hora</label>
        <input type="number" name="hora"  min="0" max="23"required >
        <label for="min">Introduzca los minutos</label>
        <input type="number" name="min" min="0" max="59" required>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    if (isset($_POST["hora"])) {
        $hora = $_POST["hora"];
        $min = $_POST["min"];
        $tiempo = ($hora * 3600) + ($min * 60);
        $segdia = 24 * 3600 ;
        $segundosrest = $segdia - $tiempo;

        echo " Faltan $segundosrest segundos para la medianoche.";
    }
    ?>
    
</body>
</html>