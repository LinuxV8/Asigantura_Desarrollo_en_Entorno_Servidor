<html>

<head>
    <meta charset="UTF-8">
    <title>Cuarto ejercicio de PHP</title>
    <style>
        table,tbody,thead,th,td{
            border: 1px solid black;
        }
        td{
            text-align: center;
        }


    </style>
</head>

<body>

    <?php
    $Deportes = [
        "Fútbol" => "./img/futbol.jpg",
        "Baloncesto" => "./img/Baloncesto.jpg",
        "Tenis" => "./img/tenis.png",
        "Ciclismo" => "./img/ciclismo.png",
        "Fórmula 1" => "./img/Formula1.png",
     ];
    ?>

<table>

<thead>
<th> Deporte </th>
<th> Logo </th>
</thead>


<?php 
foreach ($Deportes as $key => $value) {
    echo "<tbody><td>$key</td>";
    echo "<td><img src='$value' alt='$key' width='50' height='50'></td></tbody>";

}
?>

</table>

</body>

</html>