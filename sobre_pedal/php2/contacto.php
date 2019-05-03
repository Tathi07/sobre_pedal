<?php

$nom = $_POST["nombre"];
$com = $_POST["comentario"];


$correo = "sobre.pedal04@gmail.com";
$asunto = "correo enviado desde el sitio web por: " . $nom;

$mensaje = "Nombre: " . $nom . "<br>" . "Mensaje: " . $com;

$mensaje =  "Comentario: " . $com;

$tipomenaje = "Content-type:text/html;charset=UTF-8";


mail(/*a quien le vamos a enviar el correo*/$correo, /**/$asunto, /**/ $mensaje, $tipomenaje );

echo "<script> location.href='../php/contactanos.php?contactanos='</script>";


?>