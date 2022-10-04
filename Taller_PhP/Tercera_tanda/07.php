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


 $PaisesAleatorios=[];
 $PaisesAleatorios=array_rand($paises,2);

 foreach ($PaisesAleatorios as $clave => $valor) {
    echo "<br>El pais $valor tiene la siguiente información:";
        foreach ($paises[$valor] as $clave2 => $valor2) {
            echo "<br>$clave2 : $valor2";
    }
    echo "<br>Ciudades:";
    foreach ($ciudades[$valor] as $clave3 => $valor3) {
        echo "<li>$valor3:<a href='https://www.google.es/maps/place/$valor3'>Enlace</a></li>";

 }
}



    ?>


</body>