<form name='registro' method="GET">

<table>
    
<tr>
<td><h1>La Frutería del siglo XXI</h1></td></tr>

<tr>
<td><h5 style="margin-bottom:0;">BIENVENIDO A LA FRUTERIA DEL SIGLO XXI</h5></td>
</tr>
<tr>
<td>Introduzca su nombre de cliente: <input type="text" name="nombreUsuario"
    value="<?=(isset($_REQUEST['nombreUsuario']))?$_REQUEST['nombreUsuario']:''?>"></td>
</tr>
</table>

<input type="submit" name="orden" value="Entrar">
</form>