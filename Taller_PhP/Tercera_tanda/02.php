<html>

<head>
    <meta charset="UTF-8">
    <title>Segunda ejercicio de PHP</title>
</head>

<body>

    <?php
    $Periódicos = [
        "El País" => "https://elpais.com/",
        "El Mundo" => "https://www.elmundo.es/",
        "ABC" => "https://www.abc.es/",
        "La Razón" => "https://www.larazon.es/",
        "El Confidencial" => "https://www.elconfidencial.com/"
    ];
    

    foreach ($Periódicos as $key => $value) {
        echo "<li><a href='$value'>$key</a></li><br>";
    }
    ?>

</body>

</html>