<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejerc-08</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="numbers">Escriba tres números diferentes</label>
        <input type="number" name="num-first">
        <input type="number" name="num-second">
        <input type="number" name="num-third">
        <input type="submit" value="Aceptar">
    </form>

    <?php
    if (isset($_POST['num-first'])) {
        $numfirst = $_POST['num-first'];
        $numsecond = $_POST['num-second'];
        $numthird = $_POST['num-third'];

        if ($numfirst > $numsecond) {
            $aux = $numfirst;
            $numfirst = $numsecond;
            $numsecond = $aux;
        }
        if ($numsecond > $numthird) {
            $aux = $numsecond;
            $numsecond = $numthird;
            $numthird = $aux;
        }
        if ($numfirst > $numthird) {
            $aux = $numfirst;
            $numfirst = $numthird;
            $numthird = $aux;
        }

    echo " <br> $numfirst, $numsecond, $numthird";

     }
        
    
    ?>



</body>

</html>