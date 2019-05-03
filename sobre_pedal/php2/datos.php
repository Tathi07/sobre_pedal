<?php

$NombreUsuario = $_POST["nombre"];
$ContrasenaUsuario = $_POST["contraseña"];

$link = mysqli_connect("localhost","root","","sobre_pedal") or die("Error en la conexion");

$sql = "SELECT * FROM usuarios_ingresados WHERE Nombre_user = '$NombreUsuario' AND  Contrasena_user = '$ContrasenaUsuario'" ;

$result = mysqli_query($link,$sql);

$count = mysqli_num_rows($result);


if($count == 1){
	session_start();
	$_SESSION["usuario"] = $NombreUsuario;
	header ("Location: ../php/administrador.php");

}else{
	header ("Location: ../php/login.php?error=dato");
}

mysqli_close($link);

?>