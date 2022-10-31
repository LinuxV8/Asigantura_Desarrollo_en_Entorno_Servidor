<form name='entrada' method="POST">

<table>
    
<tr>
<td><h1>La Frutería del siglo XXI</h1></td></tr>

<tr>
<td><h5 style="margin-bottom:0;">Realice su compra <!-- <$_SESSION('usuario') ?> --></h5></td>
</tr>
<tr>
<td>Selecciona la fruta: <select name="frutas">
<option value="1">Naranjas</option>
<option value="2">Limones</option>
<option value="3">Plátamos</option>
<option value="4">Manzanas</option>
</select>
Cantidad:<input type="number" name="cantidad"><input type="submit" name="anotar" value="Anotar"><input type="submit" name="terminar" value="Terminar">


</td></tr>
</table>

<input type="submit" name="orden" value="Entrar">
</form>