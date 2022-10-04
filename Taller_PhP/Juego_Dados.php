<?php


define('Dado1', "&#9856");
define('Dado2', "&#9857");
define('Dado3', "&#9858");
define('Dado4', "&#9859");
define('Dado5', "&#9860");
define('Dado6', "&#9861");

$Dados = [
    1 => Dado1,
    Dado2,
    Dado3,
    Dado4,
    Dado5,
    Dado6
];


//Funcion que simula lanzar dados, necesario Array donde esten los dados y el numero de tiradas que se haran

function lanzarDados($Array, int $numero)
{
    $Tirada = [];
    //Se rellena el array con las claves aleatorias hasta n tiradas y se devuelve
    for ($i = 0; $i < $numero; $i++) {
        $Tirada[$i+1] = array_rand($Array);
    }
    return $Tirada;
}

function elMayor($Array)
{
    $Mayor = 0;
    for ($i = 1; $i <=sizeof($Array); $i++) {
        if ($Array[$i]>$Mayor) {
            $Mayor=$Array[$i];
        }
    }
    
    return $Mayor;
}

function elMenor($Array)
{
    $Menor = 6;
    for ($i = 1; $i <=sizeof($Array); $i++) {
        if ($Array[$i]<$Menor) {
            $Menor=$Array[$i];
        }
    }
    return $Menor;
}

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Dados</title>

</head>

<body>
    
    <h1>Cinco Dados</h1>
    <p>Actualice la página para mostrar una nueva entrada</p>
    <?php
    $resultadoJ1 = 0;
    $resultadoJ2 = 0;

    $TiradasJugador1 = [];
    $TiradasJugador2 = [];
   /* Para comprobar que estan los dados en el array bien
    foreach ($Dados as $clave => $valor) {
        echo  "La pos $clave es $valor <br>";
    }*/

    //Simula el jugador 1 tirando los dados
    echo "<strong>JUGADOR 1:";
    $TiradasJugador1 = lanzarDados($Dados, 6);
    //echo $TiradasJugador1;
    foreach ($TiradasJugador1 as $clave2 => $valor2) {
        //echo "<br>La clave $clave2 tiene el valor $valor2 <br>";
        $resultadoJ1 += $valor2;
        //echo $resultadoJ1;
        echo  "<span style='font-size:2rem'>$Dados[$valor2]</span> ";
    }

  $ValorMayor = elMayor($TiradasJugador1);
 //echo "El dado mayor es: $ValorMayor";
 //echo "<br>";
 $ValorMenor = elMenor($TiradasJugador1);
 //echo "El dado menor es: $ValorMenor";
//echo "<br>";

   echo $resultadoJ1=$resultadoJ1-$ValorMayor - $ValorMenor;
   echo " Puntos </strong>";
   
    //Simula el jugador 2 tirando los dados
    echo "<br> <strong>JUGADOR 2:";
    $TiradasJugador2 = lanzarDados($Dados, 6);
    //echo $TiradasJugador2;
    foreach ($TiradasJugador2 as $clave3 => $valor3) {
        $resultadoJ2+=$valor3;
        echo  "<span style='font-size:2rem'>$Dados[$valor3]</span> ";
    }

 $ValorMayor = elMayor($TiradasJugador2);
 $ValorMenor = elMenor($TiradasJugador2);
   echo $resultadoJ2=$resultadoJ2-$ValorMayor - $ValorMenor;
   echo " Puntos </strong> <br>";

if($resultadoJ1>$resultadoJ2){
    echo "<strong>Resultado</strong> Ha Ganado el Jugador 1";
}elseif($resultadoJ1<$resultadoJ2){
    echo "<strong>Resultado</strong> Ha Ganado el Jugador 2";
}else echo "<strong>Resultado</strong> Han empatado";

    ?>


</body>

</html>