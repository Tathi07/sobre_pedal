<?php

$comentario = $_POST["comentario"];
$correo = $_POST["correo"];

require "conexion.php";

$sql = "SELECT * FROM `registrados`";

$result = mysqli_query($conect, $sql);

$correoE = $correo;
$asunto = "correo enviado desde el sitio web por: sobrePedal ";

$mensaje = "hola" . "<br>" . "Mensaje: " . $comentario;

$mensaje =  "Comentario: " . $comentario;

$tipomensaje = "Content-type:text/html;charset=UTF-8";


mail(/*a quien le vamos a enviar el correo*/$correoE, /**/$asunto, /**/ $mensaje, $tipomensaje);


echo "<script> location.href= '../php/enviarCorreoUsuario.php?correoUsuario='</script>";
}
?>