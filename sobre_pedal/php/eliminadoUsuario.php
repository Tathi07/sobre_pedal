<?php

$idRe = $_GET["idRegistrados"];


require "../php2/conexion.php";

$sql = "DELETE FROM `registrados` WHERE ID_registrados='$idRe'";

$result = mysqli_query($conect, $sql);

//header("location: contactoRegistrados.php");

echo "<script> location.href='contactoRegistrados.php'</script>";

?>