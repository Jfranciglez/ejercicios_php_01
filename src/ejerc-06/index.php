<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-06</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="fecha">Escriba su fecha de nacimiento</label>
        <input type="date" name="fecha">
        <input type="submit" value="Aceptar">
    </form>

    <?php
     if (isset($_POST['fecha'])){  
        $fecha = $_POST["fecha"];


        switch ($fecha):
            case ()
     }
     ?>
</body>
</html>