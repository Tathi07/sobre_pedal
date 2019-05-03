<?php

$nom = $_POST["nombre"];
$corr = $_POST["correo"];
$idRegistrados = $_POST["ID_registrados"];


require "conexion.php";

$sql = "UPDATE `registrados` SET `nombre_registrados`= '$nom', `correo_registrados`='$corr' WHERE `ID_registrados` = '$idRegistrados' ";

$result = mysqli_query($conect, $sql);



echo "<script> location.href='../php/contactoRegistrados.php'</script>";






?>