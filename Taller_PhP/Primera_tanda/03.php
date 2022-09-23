<html>
<head>
<meta charset="UTF-8">    
<title>Tercer ejercicio de PHP</title>
</head>

<body>

<?php
$numAleatorio=random_int (1, 9);
echo"El número es: $numAleatorio <br>";
?>

<code>
<?php
for ($fila=0; $fila <$numAleatorio ; $fila++) { 

    for ($columna=1; $columna <= ($numAleatorio*2)-1; $columna++) { 
        if ($columna<=($numAleatorio+$fila) && $columna>=($numAleatorio-$fila) )  {
            echo "*";
        }
        else{
            echo "&nbsp;";
        }
        
    }
    echo "<br>";
}

?>
<code>