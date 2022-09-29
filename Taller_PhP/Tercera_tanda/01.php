<html>
<head>
<meta charset="UTF-8">    
<title>Primer ejercicio de PHP</title>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
</head>

<body>

<?php

$Array=[];

function RellenarTabla($tabla=[]){
    for ($i=0; $i < 20; $i++) { 
        $tabla[$i]=random_int(1, 10);
    }
    return $tabla;

}

function BuscaModa($tabla=[]){
    $moda=0;
    $contadormoda=0;
    $contador=0;

    for ($i=0; $i < count($tabla); $i++) { 
        for ($j=$i+1; $j < count($tabla); $j++) { 
            if($tabla[$i]==$tabla[$j]){
                $contador++;
            }
        }
        if($contador>$contadormoda){
            $contadormoda=$contador;
            $moda=$tabla[$i];
        }elseif($contador==$contadormoda){
            $moda="No hay moda";
        }
        $contador=0;
    }
return $moda;
}
//echo count($Array);
$Array=RellenarTabla($Array);
//echo count($Array);
$TModa=BuscaModa($Array);


?>

<p>El array es: </p>

<table>
    <tr>
    <?php for($i=0; $i < 20; $i++) { 
        echo "<td>$Array[$i]</td>";
    } ?>
    <tr>
</table>

<p>Su min es:<?php echo min($Array) ?> , y  su max:<?php echo max($Array) ?></p>
<p>Su moda es: <?php echo $TModa ?></p>

</body>
</html>