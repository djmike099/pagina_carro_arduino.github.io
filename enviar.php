<?php
$destino="kevincruz553@gmail.com";
$nombre=$_Post["Nombre"];
$correo=$_Post_["Correo"];
$telefono=$_Post_["Telefono"];
$mensaje=$_Post_["Mensaje"];
$contenido="Nombre:".$Nombre."\nCorreo:".$Correo."\nTeléfono:".$Telefono."\nMensaje:".$Mensaje;
mail($destino,"Contacto",$contenido);
header("Location:gracias.html");
 ?>
