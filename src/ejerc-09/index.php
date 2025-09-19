<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <label for="numero">Escriba un número</label>
        <input type="number" name="numero">
        <input type="submit" value="Aceptar">
    </form>


    <?php
    
     if (isset($_POST['numero'])){ 
        $numero = $_POST['numero'];
     

        for ($i = 0; $i <=10; $i++){
          ?>        
     <table>
        <thead>
        <tr>
        <th><?=" tabla del $numero"?></th>
        <th><?="$numero * $i"?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $tabla = $numero * $i;?></td>
        
        </tr>
        </tbody>
    <?php
        }
     } 
    ?>
</body>
</html>