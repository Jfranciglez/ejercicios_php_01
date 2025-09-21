<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-15</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    
    <table>
        <thead>
            <tr class="fondo">
                <th></th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
                <th>h</th>
            </tr>
            <tr>
                <th></th>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
                <th>h</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <form action="index.php" method="post">
        <label for="coordenadas">Introduzca una coordenada (ej:e4)</label>
        <input type="text" name="coordenadas">
        <input type="submit" value="Aceptar">
    </form>

    <?php
    if (isset($_POST['coordenadas'])) {
        $coordenadas = $_POST['coordenadas'];
        $alfil = str_split($coordenadas);

        $x = $coordenadas[0];
        $y = $coordenadas[1];


        
        for ($fila = 8; $fila > 0; $fila--) {
            echo "<tr> <td>$fila</td></tr>";
            for ($columna = 1; $columna < 9; $columna++) {
                $alterna = (($fila + $columna) % 2 == 0) ? "black" : "white";
                echo " <td class='$alterna'></td>";

                if ($x == $columna && $y == $fila) {
                    $extra = "alfil";
                    echo "<td class='$alterna $extra'>♗</td>";

                } elseif (abs($columna - $x) == abs($fila - $y)) {
                    $extra = "mov";
                    echo "<td class='$alterna $extra'></td>";
                } else {
                    echo "<td class='$alterna'></td>";
                }
            }

            echo "</tr>";


        }

    }


    ?>
    
    
</body>

</html>