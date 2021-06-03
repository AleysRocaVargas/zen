<?php
$destino= "michugl@hotmail.com";
$nombre = $_post["nombre"];
$nombre = $_post["correo"];
$nombre = $_post["telefono"];
$nombre = $_post["ciudad"];
$nombre = $_post["mensaje"];
$contenido = "nombre: " . $nombre . "\ncorreo:" . $correo . "\nTelefono:" . $telefono ."\nciudad:". $ciudad ."\nMensaje:" . $mensaje ;
mail($destino,"contacto", $contenido);
header("location:index.html");
?>