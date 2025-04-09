<?php
    $fecha=date("d-m-y");
    $para = "nomar6rr@hotmail.com"; // Tu correo electrónico
    $asunto = "Nuevo mensaje de contacto";
    $desde = 'From: '.$_POST['email'];	
    $mensaje = "NOMBRE DE REMITENTE: ".$_POST['nombre']."\n\r"."EMAIL DEL REMITENTE: ".$_POST['email']."\n\r"."DESCRICION: ".$_POST['mensaje']."\n\r"."ENVIADO: ".$fecha;
 	mail($para,$asunto,$mensaje,$desde);
    echo "¡Mensaje enviado con éxito!";
?>
