<?php
$fecha=date("d-m-y");
$para = "info@tecnomar.netne.net";
$asunto = "Formulario de solicitud Tecnomar";
$desde = 'From: '.$_POST['correo'];
$mensaje = "NOMBRE DE REMITENTE: ".$_POST['nombre']."\n\r".
"TELEFONO DEL REMITENTE: ".$_POST['telefono']."\n\r"."EMAIL DEL REMITENTE: ".$_POST['correo']."\n\r"."DESCRIPCION DEL PROBLEMA: ".$_POST['problema']."\n\r"."ENVIADO: ".$fecha;
mail($para,$asunto,$mensaje,$desde);
?>