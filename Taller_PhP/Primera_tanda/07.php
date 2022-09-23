<?php
$NumAleatorio1=random_int (100, 500);
$NumAleatorio2=random_int (100, 500);
$NumAleatorio3=random_int (100, 500);
?>

<html>
<head>
<meta charset="UTF-8">    
<title>Siete ejercicio de PHP</title>
<meta http-equiv="refresh" content="9">


<style>
    table{
        height: 50px;
    }
    table#uno{
        background-color: red;
        width: <?php echo $NumAleatorio1?>px;
        
    }
    table#dos{
        background-color: green;
        width: <?php echo $NumAleatorio2?>px;
    }
    table#tres{
        background-color: blue;
        width: <?php echo $NumAleatorio3?>px;
    }
</style>

</head>

<body>

<table id="uno" width:<?php echo $NumAleatorio1?>px;>
<tr id="ROJO">
    <td> Rojo<?php echo "($NumAleatorio1)" ?> </td>  
</tr> 
</table>

<table id="dos">
<tr id="VERDE">
<td>Verde<?php echo "($NumAleatorio2)" ?></td>
</tr>
</table>

<table id="tres">
<tr id="AZUL">
<td>Azul<?php echo "($NumAleatorio3)" ?></td>
</tr>
</table>

</body>