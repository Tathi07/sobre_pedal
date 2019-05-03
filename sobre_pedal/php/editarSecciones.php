<?php

require '../php2/conexion.php';


$idsecciones = $_GET["id_secciones"];

$sql = "SELECT * FROM secciones WHERE secciones_Sitio = '$idsecciones'";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);




session_start();

if (isset($_SESSION["usuario"])){



}else{
	header ("Location: login.php?error=dato");
}


?>


<!DOCTYPE html>
<html>
<head>

	<style>

	section{
		border-radius: 8px;
		margin: 0 auto;
		background: white;
		width: 90%;
		height: 500px;
		opacity: 0.8;
		margin-top: 25px;
		border: none;

	}

	section a{
		border-color: #fcd7b0;
	}
		
	
	body{
		
		background-image: url(../img/admin_fondo.png) !important ; 
	}


	.logo{

		margin-top: 20px !important; 
		margin: 0 auto;
		width: 200px;
    	height: 80px;
		background-image: url(../img/logo_pequeño.png);
		z-index: 3;
	}

	.enviar{

		height: 40px;
		width: 140px;
		background: #faa854 !important;
	}


	.enviar:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}


	.btnaDMIN{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	float: right;
	margin-top: 20px;
	}


	.btnaDMIN:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}

	.ContenedorModiSet{
		
		height: 50%;
		width: 80% !important;
		opacity: 0.8;
		box-shadow: 1px 0px 25px #998F8A;
		padding: 40px !important;
		margin: 0 auto;
		margin-top: 20px !important;

	}

	
	.ContenedorModiSet:hover{
		opacity: 1;
		box-shadow: 1px 0px 25px #fc7000;
	}


	.titulo{

		 color: #fc7000;	 
	}



	</style>


	<meta charset="utf-8">
	<title>Editar secciones</title>
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script  src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<script defer src="../js/jquery-3.3.1.min.js"></script>

</head>
<body>

	<div class="ContenedorLogo">
		<a href="secciones.php" class="btn btnaDMIN animated slideInRight delay-0s">
			Volver
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>


<div class="jumbotron ContenedorModiSet" >
	

	<form action="../php2/update_secciones.php" method="post" enctype="multipart/form-data">

		<h3 style="text-align: center; color: #fc7000; "> <?php echo $row['secciones_Sitio'] ?> </h3>

		<div class="form-group" >
			<label for="exampleFormControlTextarea1" class="titulo">Fechas: </label>
			<input type="number" name="fechasSecciones" value="<?php echo $row['fecha'] ?>" >
		</div>

		<hr>

		<br>
		<div class="custom-file">
			<label for="exampleFormControlFile1" class="titulo" >¡ Sube una foto del nuevo personaje !</label>

			<input type="file"  name="foto" accept="image/*" class="form-control-file
			" id="exampleFormControlFile1">
		</div>

		<input  type="hidden" name="ident" value="<?php echo $row['secciones_Sitio'] ?>">

		<hr>

		<br>

		<button type="submit" class="btn enviar">Enviar</button>
	</form>


</div>







</body>
</html>