<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    

    <form action="index.php" method="post">
        <label for="plantas">Seleccione número de plantas</label>
        <input type="number" name="plantas">
        <label for="emoji">Seleccione un emoji</label>
        <select name="emoji" id="emoji">
            <option value="❤️"></option>
            <option value="⭐">⭐</option>
            <option value="🎉">🎉</option>
            <option value="😍">😍</option>
            <option value="🐻">🐻</option>
        </select>
        <input type="submit" name="aceptar" value="Aceptar">

    </form>

    <?php
    if (isset($_POST['plantas'])) {
        $plantas = $_POST["plantas"];
        $emoji = $_POST["emoji"];


        $longitud = 1;
        for ($i = 1; $i <= $plantas; $i++) {
            ?>
            <div>
                <?php
                for ($f = 1; $f <= $longitud; $f++) {


                    echo " $emoji  ";
                }
                $longitud += 2;


                echo "<br>";
                ?>
            </div>
            <?php
        }
    }

    ?>


    <br> <br>
    <a href="index.php"><button>Volver al inicio</button></a>
    <a href="./index.php"><button>Página Principal</button></a>

    
</body>

</html>