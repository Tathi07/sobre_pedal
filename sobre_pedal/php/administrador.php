<?php

session_start();

if (isset($_SESSION["usuario"])){



}else{
	//header ("Location: login.php?error=dato");

	echo "<script> location.href='login.php'</script>";
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
		
	.Contenedores{
		
		padding-top: 80px;
		margin-left: 250px;
		margin-right: 80px;
		border: none !important;
	
	}

	.Contenedores2{
		
		margin-top: 5px;
		margin-left: 250px;
		margin-right: 80px;
		border: none !important;
		
	
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

	.btnaDMIN{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	}


	.btnaDMIN:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}



	.btnaDMIN2{

		height: 40px;
		width: 140px;
	background: #faa854 !important;
	float: right;
	margin-top: 20px;
	}


	.btnaDMIN2:hover{
		box-shadow: 1px 0px 25px #998F8A;
		height: 40px;
		width: 140px;
	
	}


	.radky_saluda{
	width: 224px;
    height: 438px;
    background: url(../img/radky_saluda.png);
    z-index: 2;
    position: absolute;
	margin: 27px 40px 41px 19px;
    animation: radkySaluda 1s steps(6) infinite running;
    animation-delay: 1.5s;
	}

	 @keyframes radkySaluda{
 	

	100%{
		
		background-position: -1344px;
	}


	</style>

	<meta charset="utf-8">

	<title>Administrador</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script  src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<script defer src="../js/jquery-3.3.1.min.js"></script>

</head>
<body>



<div class="ContenedorLogo">
		<a href="login.php" class="btn btnaDMIN2 animated slideInRight delay-0s">
			Cerrar sesion
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>




<section class="animated zoomIn delay-0s">

<div class="radky_saluda"></div>

<div class="card text-center Contenedores">
  <div class="card-header" style="background: #fcd7b0;">
    Secciones
  </div>
  <div class="card-body">
    <p class="card-text">Edita las secciones de sobre pedal</p>
    <a href="secciones.php" class="btn btnaDMIN">Ver secciones</a>
  </div>
  
</div>

<br>
<br>

<div class="card text-center Contenedores2">
  <div class="card-header" style="background: #fcd7b0;">
    Contactos 
  </div>
  <div class="card-body">
    <p class="card-text">Mira todos los usuarios registrados y contactalos</p>
    <a href="contactoRegistrados.php" class="btn  btnaDMIN">Ver usuarios</a>
  </div>
  
</div>

</section>


</body>
</html>