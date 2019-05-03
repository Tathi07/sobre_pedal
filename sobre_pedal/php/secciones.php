<?php 

session_start();

if (isset($_SESSION["usuario"])){



}else{
	header ("Location: login.php?error=dato");
}

require "../php2/conexion.php";

$sql = "SELECT * FROM secciones";

$result = mysqli_query($conect, $sql);

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
		
	}

	.ContenedorLog{
		margin-top: 20px !important; 
		margin: 0 auto;
		width: 100%;
    	height: 80px;
		
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



	.secciones{
		
		height: 191px;
		width: 369px !important;
		text-align: center;
		color: white;
		border: none !important;
		box-shadow: 1px 0px 25px #998F8A;
		float: left;
		margin: 35px;
		width: 50%;



	}

	

	.secciones:hover{
		box-shadow: 1px 0px 25px #fc7000;

	}


	.titulo{

		 color: white; 
		 background-color: gray; 
		 height: 50px; 
		 width: 230px; 
		 opacity: 0.8; 
	}

	.titulo:hover{

		 
		 background-color: #fc7000;
		 
	}


	::-webkit-scrollbar {
    height: 5px;
}
 
::-webkit-scrollbar-thumb {
   
    background: #fc8000; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #fc8000; 
}




	</style>

	<meta charset="utf-8">

	<title>Secciones</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script  src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<script defer src="../js/jquery-3.3.1.min.js"></script>

</head>
<body>


	 
	
<?php 

	echo "<div class='ContenedorLogo'>";
	echo "<a href='administrador.php'";
	echo "class='btn btnaDMIN animated slideInRight delay-0s'> Volver";
	echo "</a>";
	echo "<div class='logo animated slideInDown delay-0s'></div>";

	echo "</div>";



echo "<a href='editarSecciones.php?id_secciones=seccion2'>";
	echo "<div class='card mb-3 secciones animated zoomIn delay-0s'";
	echo " style='max-width: 700px;'>";
	echo "<div class='row no-gutters'>";
	echo "<div class='col-md-4'>";
	echo "<img src='../img/secciones/seccion2Parque.png'";
	echo "style='float: left, width= 250px;'>";
	echo "</div>";
	echo "<div class='col-md-8'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title titulo'>";
	echo "Seccion 2 <br> Parque Saint-Cloud.";
	echo "</h5>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</a>";



	echo "<a href='editarSecciones.php?id_secciones=seccion3'>";
	echo "<div class='card mb-3 secciones animated zoomIn delay-0s'";
	echo " style='max-width: 700px;'>";
	echo "<div class='row no-gutters'>";
	echo "<div class='col-md-4'>";
	echo "<img src='../img/secciones/seccion3Casa.png'";
	echo "style='float: left, width= 250px;'>";
	echo "</div>";
	echo "<div class='col-md-8'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title titulo'>";
	echo "Seccion 3 <br> Casa de Peter.";
	echo "</h5>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</a>";



	echo "<a href='editarSecciones.php?id_secciones=seccion5'>";
	echo "<div class='card mb-3 secciones animated zoomIn delay-0s'";
	echo " style='max-width: 700px;'>";
	echo "<div class='row no-gutters'>";
	echo "<div class='col-md-4'>";
	echo "<img src='../img/secciones/seccion6eDificio.png'";
	echo "style='float: left, width= 250px;'>";
	echo "</div>";
	echo "<div class='col-md-8'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title titulo'>";
	echo "Seccion 5 <br> Edificio Corriere della sera.";
	echo "</h5>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</a>";
		


		echo "<a href='editarSecciones.php?id_secciones=seccion6'>";
	echo "<div class='card mb-3 secciones animated zoomIn delay-0s'";
	echo " style='max-width: 700px;'>";
	echo "<div class='row no-gutters'>";
	echo "<div class='col-md-4'>";
	echo "<img src='../img/secciones/seccion7ZonaRural.png'";
	echo "style='float: left, width= 250px;'>";
	echo "</div>";
	echo "<div class='col-md-8'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title titulo'>";
	echo "Seccion 6 <br> Zona rural.";
	echo "</h5>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</a>";





    echo "<a href='editarSecciones.php?id_secciones=seccion7'>";
	echo "<div class='card mb-3 secciones animated zoomIn delay-0s'";
	echo " style='max-width: 700px;'>";
	echo "<div class='row no-gutters'>";
	echo "<div class='col-md-4'>";
	echo "<img src='../img/secciones/seccion8PistaBMX.png'";
	echo "style='float: left, width= 250px;'>";
	echo "</div>";
	echo "<div class='col-md-8'>";
	echo "<div class='card-body'>";
	echo "<h5 class='card-title titulo'>";
	echo "Seccion 7 <br> Pista BMX.";
	echo "</h5>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</a>";
		
		
 
	


 

?>


</body>
</html>