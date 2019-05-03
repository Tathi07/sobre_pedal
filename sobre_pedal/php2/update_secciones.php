<?php 

$fechas= $_POST["fechasSecciones"];
$valorid =$_POST["ident"];

$fotosubida = $_FILES["foto"];


$ruta = "img/" . $fotosubida["name"];
$ruta2 = "../img/" . $fotosubida["name"];

require 'conexion.php';


$sql = "UPDATE secciones SET fecha= '$fechas', foto= '$ruta' WHERE secciones_Sitio = '$valorid' ";


$result = mysqli_query($conect, $sql);

move_uploaded_file($fotosubida["tmp_name"], $ruta2);




if ( $fotosubida["error"] == 0) {
	/*echo "el archivo no presenta ningun error";*/

	if( $fotosubida["type"] == "image/jpeg" || $fotosubida["type"] == "image/png"){

		/*echo "el formato es correcto" . "<br>";*/


		if($fotosubida["size"] <= 2100000) {
			/*echo "el peso es el correcto";*/

		
			

		}else{
			/*echo "la imagen supera el peso permitido";*/
		}


	}else{
		/*echo "FORMATO NO CORRECTO";*/
	}


}else {
	/*echo "ERROR";*/
}






echo "<script> location.href='../php/secciones.php' </script>";












 ?>