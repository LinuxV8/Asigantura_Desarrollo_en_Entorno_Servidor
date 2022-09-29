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

        //Comparar poblaciones, hasta encontrar el mayor  
        //recorriendo cada pais[nombre][poblacion]  
        $poblacion = 0;
        $pais = "";
        foreach ($paises as $clave => $valor) {
            //echo "<br> La poblacion de $clave es de ". $valor["Poblacion"]."<br>";
            if ($valor["Poblacion"] > $poblacion) {
                $poblacion = $valor["Poblacion"];
                $pais = $clave;
            }
        }
        echo "<br>El pais con mayor poblacion es $pais con $poblacion habitantes <br>";
        echo "Sus ciudades son: ";

        // Recorremos el array de ciudades["Francia"] para devolver sus ciudades
        for ($i = 0; $i < sizeof($ciudades[$pais]); $i++) {
            echo $ciudades[$pais][$i];
            if ($i !== sizeof($ciudades[$pais]) - 1) echo ",";
        }

        /* Es lo mismo solo que no se como poner las comas bien, solo 
     podria separar por espacios

   foreach ($ciudades[$pais] as $key => $value) {
        echo "$value ";
    }*/
    ?>

   </body>

   </html>