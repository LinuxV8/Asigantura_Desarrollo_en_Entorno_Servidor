<html>
<head>
<meta charset="UTF-8">    
<title>Cuarto ejercicio de PHP</title>
<meta http-equiv="refresh" content="3">
</head>

<body>

<?php
 $contador = 0;
 $contador6=0;

    do {
        $numAleatorio=random_int (1, 10);
        $contador++;
        echo"El número es: $numAleatorio <br>";
        if ($numAleatorio==6) {
            $contador6++;
        }
    }while($contador6!=3);

echo "<br> Han salido tres 6 seguidos tras generar $contador números en ";
echo (microtime(true));

?>
