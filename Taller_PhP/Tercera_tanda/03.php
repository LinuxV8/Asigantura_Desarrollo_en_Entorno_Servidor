<html>

<head>
    <meta charset="UTF-8">
    <title>Segunda ejercicio de PHP</title>
</head>

<body>
    <?php

    $Periodicos = [
        "El País" => "https://elpais.com/",
        "El Mundo" => "https://www.elmundo.es/",
        "ABC" => "https://www.abc.es/",
        "La Razón" => "https://www.larazon.es/",
        "El Confidencial" => "https://www.elconfidencial.com/"
    ];

    $Periodico_recomendado=array_rand($Periodicos, 1);
    $enlace=$Periodicos[$Periodico_recomendado];
   echo "El peridico recomendado es: ";
    echo "<a href='$enlace'>$Periodico_recomendado</a>";
     

    ?>

</body>

</html>