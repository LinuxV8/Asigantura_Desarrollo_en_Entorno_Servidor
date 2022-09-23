<html>
<head>
<meta charset="UTF-8">    
<title>Sexto ejercicio de PHP</title>
<meta http-equiv="refresh" content="9">

<style>
    td+td{
        text-align:right;
    }
    td,table {
        border: 3px solid black;
        border-collapse: collapse;
        font-size: 50px;
    }
    thead{
        background-color:lightgrey;
    }
    tbody tr:nth-child(even) { 
        background-color: lightblue;
         }

    div#cabecera{
    background-color:blue;
    text-align:center;
    color:white;
    padding: 50px;
    font-size: 30px;
    }

    div#cuerpo{
        margin: 50px;
    }
    
</style>

</head>

<body>

<div id="Cabecera">
<h1>TABLA DE MULTIPLICAR</h1>
</div>

<?php
$NumAleatorio=random_int (1, 10);
?>
<div id="Cuerpo">
<table>

<thead>
<tr>
    <td> <?php echo "Tabla del $NumAleatorio";?></td>
    <td> </td>
</tr>

</thead>

<tbody>
<tr>
    <td><?php echo "$NumAleatorio x 1 ="?> </td>
    <td><?php echo $NumAleatorio * 1 ?> </td>
</tr>
<tr>
    <td><?php echo "$NumAleatorio x 2 =" ?> </td>
    <td><?php echo $NumAleatorio * 2 ?> </td>
</tr>
<tr>
    <td><?php echo "$NumAleatorio x 3 ="?> </td>
    <td><?php echo $NumAleatorio * 3 ?> </td>
</tr>
<tr>
    <td><?php echo "$NumAleatorio x 4 ="?> </td>
    <td><?php echo $NumAleatorio * 4?> </td>
</tr>
<tr>
    <td><?php echo "$NumAleatorio x 5 ="?> </td>
    <td><?php echo $NumAleatorio * 5?> </td>
</tr>

<tr>
    <td><?php echo "$NumAleatorio x 6 ="?> </td>
    <td><?php echo $NumAleatorio * 6?> </td>
</tr>
<tr>
    <td><?php echo "$NumAleatorio x 7 =" ?> </td>
    <td><?php echo $NumAleatorio * 7?> </td>
</tr>

<tr>
    <td><?php echo "$NumAleatorio x 8 ="?> </td>
    <td><?php echo $NumAleatorio * 8?> </td>
</tr>

<tr>
    <td><?php echo "$NumAleatorio x 9 ="?> </td>
    <td><?php echo $NumAleatorio * 9?> </td>
</tr>

<tr>
    <td><?php echo "$NumAleatorio x 10 ="?> </td>
    <td><?php echo $NumAleatorio * 10?> </td>
</tr>
</tbody>
<table>
</div>

</body>