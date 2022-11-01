<form name='entrada' method="POST">

<table>
    
<tr>
<td><h1>La Frutería del siglo XXI</h1></td></tr>

<tr>
<td style="border: 2px solid black;"><?= (isset($_SESSION["pedido"]))? verpedido($_SESSION["pedido"]): "Cesta vacía";?></td></tr>
</table>
<br>
<input type="button" value=" NUEVO CLIENTE " onclick="location.href='<?=$_SERVER['PHP_SELF'];?>'">
</form>