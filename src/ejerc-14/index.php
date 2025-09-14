<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arrays-asociativos</title>
</head>
<body>

<h2>Este programa escoge 10 cartas de la baraja española y las suma según el juego de "la brisca". </h2>

<form action="index.php" method="post">
<input type="submit" name="Comenzar" value="Comenzar"> 
</form>
    <?php
    if (isset($_POST['Comenzar'])){ //dice si la variable esta definida
    $palos= ['oros', 'copas', 'espadas', 'bastos'];//hacer 2 arrays unos con palos y otros con valores
    $valores = ["as", 2, 3, 4, 5, 6, 7, "sota", "caballo", "rey"];
    
    
    
    $palo = $palos[random_int(0,3)];
    $valor = $valores[random_int(0,9)];


    $carta = "$valor de $palo";
  

    $puntos = [
        "as" => 11,
        "3" => 10,
        "rey" => 4,
        "caballo" => 3,
        "sota" => 2,
        "7" => 0,
        "6" => 0,
        "5" => 0,
        "4" => 0,
        ] ;


        $suma = 0;
        for ($i=1; $i<=10 ; $i++ ) {
           $palo = $palos[random_int(0,3)];
           $valor = $valores[random_int(0,9)];


            $carta = " $valor de $palo";
              echo " La carta es: $carta. <br>";
              echo " Vale $puntos[$valor] puntos. <br>";
                                        //$puntos[$valor] += $puntos[$valor]; asi se suma consigo mismo pero en la misma iteración.
            $suma += $puntos[$valor]++ ;// asi se suma un el mismo valor pero en la sgte iteración.
           
         
      
        };
        echo " total puntos es: $suma <br>";
    }

    
    ?>
    <br> <br>
     <a href="index.php"><button>Volver al inicio</button></a>

</body>
</html>