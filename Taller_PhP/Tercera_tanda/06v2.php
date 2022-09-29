<html>

<head>
    <meta charset="UTF-8">
    <title>Segunda ejercicio de PHP</title>
</head>

<body>

    <?php
    // Forma antigua de definir Array en PHP
    $paises = array(
        'Francia' => array("Capital" => "París", "Poblacion" => "50000000"),
        'España' => array("Capital" => "Madrid", "Poblacion" => "42000000"),
        'Italia' => array("Capital" => "Roma", "Poblacion"   => "46000000"),
        'Argentina' => array("Capital" => "Buenos Aires", "Poblacion" => "40000000"),
        'Colombia' => array("Capital" => "Bogotá", "Poblacion"  => "36000000"),
        'Chile' => array("Capital" => "Santiago", "Poblacion"   => "36000000"),
        'Suecia' => array("Capital" => "Estocolmo", "Poblacion" => "25000000"),
    );
    // Forma moderna, mas compacta
    $ciudades = [
        'Francia' =>    ["París", "Burdeos", "Niza", "Lille", "Nantes"],
        'España' =>     ["Madrid", "Barcelona", "León", "Sevilla", "Valencia", "Málaga"],
        'Italia' =>     ["Roma", "Venecia", "Florencia", "Pisa", "Génova", "Milán", "Turín", "Nápoles"],
        'Argentina' =>  ["Buenos Aires", "Córdoba", "Parana", "Rosario"],
        'Colombia' =>   ["Bogotá", "Medellín", "Cali", "Barranquilla", "Bucaramanga"],
        'Chile' =>      ["Santiago", "Arica", "Iquique", "Osorno", "Viña del Mar"],
        'Suecia' =>   ["Estocolmo", "Upsala", "Gotemburgo", "Lund"],
    ];
    // Ejemplo de uso
    echo $paises["España"]["Capital"]; // Muestra Madrid

    function ordenar_array($array)
    {
        $array_ordenado = [];
        foreach ($array as $clave => $valor) {
            $array_ordenado[$clave] = $valor;
            foreach ($valor as $clave2 => $valor2) {
                $array_ordenado[$clave][$clave2] = $valor2;
            }
        }
        return $array_ordenado;
    }


    //Devuelve el pais con mayor población
    $tablaPrueba = [];
    $tablaPrueba = ordenar_array($paises);


    foreach ($tablaPrueba as $key => $value) {
        echo "<li>$key</li>";
        foreach ($value as $key2 => $value2) {
            echo "<li>$key2: $value2</li>";
        }
    }


    ?>

</body>

</html>