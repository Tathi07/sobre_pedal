<?php

require "../php2/conexion.php";
$idE= $_GET["idRegistrados"];



$sql = "SELECT * FROM registrados WHERE ID_registrados='$idE'";

$result = mysqli_query($conect, $sql);

$row = mysqli_fetch_array($result);


session_start();

if (isset($_SESSION["usuario"])){

}else{
	//header ("Location: login.php?error=dato");
	echo "<script> location.href= 'login.php?error=dato'</script>";
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
	<title>Editar usuarios registrados</title>
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script  src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<script defer src="../js/jquery-3.3.1.min.js"></script>

</head>
<body>

	<div class="ContenedorLogo">
		<a href="contactoRegistrados.php" class="btn btnaDMIN animated slideInRight delay-0s">
			Volver
		</a>
		<div class=" logo animated slideInDown delay-0s"></div>

	</div>


<div class="jumbotron ContenedorModiSet" >
	
<h5 class='card-title titulo' style="text-align: center;">
	Editar información al usuario <?php echo $row['nombre_registrados']; ?>
 </h5>
	<hr>
	

<form action="../php2/update.php" method="post">
<input type="hidden" name="ID_registrados" value="<?php echo $row["ID_registrados"]; ?>">

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label titulo">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="nombre" value="<?php echo $row["nombre_registrados"]; ?>" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label titulo">Correo electronico</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputPassword" name="correo" value="<?php echo $row["correo_registrados"]; ?>">
    </div>
  </div>
	
	  
	  <button type="submit" class="btn enviar">Envia</button>
</form>


</div>









</body>
</html>