<?php

session_start();

if (isset($_SESSION["usuario"])){



}else{
	//header ("Location: login.php?error=dato");

	echo "<script> location.href='login.php?error=dato'</script>";
}

require "../php2/conexion.php";

$sql = "SELECT * FROM registrados";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);
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



.editar{
	float: right;
	margin-right: 10px;
		height: 40px;
		width: 140px;
	background: #faa854 !important;
	}


	.editar:hover{
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
		margin-top: 50px !important;

	}

	
	.ContenedorModiSet:hover{
		opacity: 1;
		box-shadow: 1px 0px 25px #fc7000;
	}


	.titulo{

		 color: #fc7000;	 
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
	<title>Usuarios registrados</title>
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script  src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<script defer src="../js/jquery-3.3.1.min.js"></script>

</head>
<body>

	<div class="ContenedorLogo">
		<a href="administrador.php" class="btn btnaDMIN animated slideInRight delay-0s">
			Volver
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>


<div class="jumbotron ContenedorModiSet" >
	

<ul class="list-group list-group-flush">
  
    <?php 
		while ($row = mysqli_fetch_array($result)){
				echo "<li class='list-group-item";
				echo "'>";
				echo $row["nombre_registrados"];
				echo " = ";
				echo $row["correo_registrados"];
				echo "<a href='editarRegistrados.php?idRegistrados=";
				echo $row["ID_registrados"];
				echo "'"; 
				echo "class='btn editar";
				echo "'>";
				echo "Editar</a><a href='eliminadoUsuario.php?idRegistrados=";
				echo $row["ID_registrados"];
				echo "'"; 
				echo "class='btn editar";
				echo "'>"; 
				echo "Eliminar</a><a href='enviarCorreoUsuario.php?idRegistrados=";
				echo $row["ID_registrados"];
				echo "'";
				echo "class='btn editar";
				echo "'>";
				echo "Enviar Correo</a></li>";

			}
	?>
    
</ul>





</div>







</body>
</html>