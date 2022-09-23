<html>
<head>
<meta charset="UTF-8">    
<title>Segundo ejercicio de PHP</title>
</head>

<body>

<?php
$nA=random_int (1, 9);
echo"El número es: $nA <br>";




for ($i=0; $i <= $nA ; $i++) { 
    for ($j=1; $j <= $i ; $j++ ) { 
        
        if ($i%2==0) {
            echo "<span style='color:red';>$i</span>";
        }else{
            echo "<span style='color:blue'>$i</span>";
        }
        
       
    }
    echo "<br>";
}

?>

</body>