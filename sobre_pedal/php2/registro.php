<?php

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];


require "conexion.php";

$sql = "INSERT INTO `registrados`(`ID_registrados`, `nombre_registrados`, `correo_registrados`) VALUES (NULL, '$nombre', '$correo')";

$result = mysqli_query($conect, $sql);

//header("location: ../php/registrate.php?registrado=");

echo "<script> location.href='../php/registrate.php?registrado='</script>";



?>