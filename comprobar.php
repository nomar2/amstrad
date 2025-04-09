<?php
if (($_POST['nombre']=="") or (!strchr($_POST['correo'],"@")) or (!strchr($_POST['correo'],".")) or ($_POST['telefono']=="") or ($_POST['problema']==""))
{
	include("error.htm");
}
else
{
	include("envio.php");
	include("enviocorrecto.htm");
}
?>