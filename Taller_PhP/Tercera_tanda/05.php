<html>

<head>
    <meta charset="UTF-8">
    <title>Quinto ejercicio de PHP</title>
    <style>
        table,
        tr,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            color: blue;
        }
    </style>

</head>

<body>

    <?php

    $Bonoloto = [];

    #Función que rellena una tabla con numeros aleatorios del 1-49(incluidos) diferentes
    function RellenarTablaAleatorio($tabla = [])
    {
        for ($i = 0; $i < 6; $i++) {
            $tabla[$i] = random_int(1, 49);
        }
        return $tabla;

        /* Otra forma para rellenar directamente con números distintos
        $i = 0;
        while ($i < 6) {
            $numero = random_int(1, 49);
            //Comprueba si el numero ya esta en la tabla
            if (!in_array($numero, $tabla)) {
                $tabla[$i] = $numero;
                $i++;
            }
        }
        return $tabla;*/
    }

    #Funcion que comprueba que no hayan numeros repetidos,sino los cambiara por otros aleatorios
    function TablaNumerosNoRepetidos($tabla = [])
    {
        for ($i = 0; $i < sizeof($tabla); $i++) {
            for ($j = 0; $j < sizeof($tabla); $j++) {
                if ($tabla[$i] == $tabla[$j] && $i !== $j) {
                    $tabla[$i] = random_int(1, 49);
                    $i = 0;
                    $j = 0;
                }
            }
        }
        return $tabla;
    }

    #Accion del codigo
    $Bonoloto = RellenarTablaAleatorio($Bonoloto);
    echo "**La tabla se ha rellenado** <br>";
    $Bonoloto = TablaNumerosNoRepetidos($Bonoloto);
    echo "**Se ha comprobado que la tabla no contenga números repetidos** <br>";
    ?>

    <!-- Tabla con los numeros del bonoloto -->
    <table>
        <tr>
            <?php for ($i = 0; $i < sizeof($Bonoloto); $i++) {
                if ($i == 5) {
                    echo "<td>Complementario $Bonoloto[$i]</td>";
                } else echo "<td>$Bonoloto[$i]</td>";
            } ?>
        <tr>
    </table>

</body>

</html>