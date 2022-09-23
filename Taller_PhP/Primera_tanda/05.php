<html>
<head>
<meta charset="UTF-8">    
<title>Cuarto ejercicio de PHP</title>
<meta http-equiv="refresh" content="9">

<style>
    td+td{
        text-align:right;
    }
    td,table {
        border: 3px solid black;
        border-collapse: collapse;
    }
    thead{
        color:blue;
        background-color:lightgrey;
    }
    tbody tr:nth-child(even) { 
        background-color: lightblue;
         }
</style>

</head>

<body>

<?php
$Num1=random_int (1, 10);
$Num2=random_int (1, 10);

echo "1ºNúmero: $Num1 <br>"; 
echo "2ºNúmero: $Num2 <br>";
?>
<br>
<table>
<thead>
<tr>
    <td> Operación </td>
    <td> Resultado </td>
    
</tr>
</thead>
<tbody>
<tr>
    <td><?php echo "$Num1 + $Num2"?> </td>
    <td><?php echo $Num1 + $Num2 ?> </td>
</tr>
<tr>
    <td><?php echo "$Num1 - $Num2"?> </td>
    <td><?php echo $Num1 - $Num2 ?> </td>
</tr>
<tr>
    <td><?php echo "$Num1 * $Num2"?> </td>
    <td><?php echo $Num1 * $Num2 ?> </td>
</tr>
<tr>
    <td><?php echo "$Num1 / $Num2"?> </td>
    <td><?php echo round($Num1 / $Num2,2) ?> </td>
</tr>

<tr>
    <td><?php echo "$Num1 % $Num2"?> </td>
    <td><?php echo $Num1 % $Num2 ?> </td>
</tr>
<tr>
    <td><?php echo "$Num1 ^ $Num2"?> </td>
    <td><?php echo round($Num1 ** $Num2) ?> </td>
</tr>
</tbody>
<table>

</body>