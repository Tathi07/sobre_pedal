<?php

session_start();
session_destroy();

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content="width=device-width.initial-sacle=1.0">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<style>


		
		.fondo{

			margin: 0 auto;
	color: white;
	width: 50%;
	background-image: url(../img/admin_fondo.png);
	background-repeat: no-repeat;

		}


		.login{
	opacity: 0.6;
	padding: 80px;
	margin-left: -59px;
	margin-top: 20px;
	width: 800px;
	color: gray;
}

.login:hover{
	opacity: 0.9;
	background-color: white;
	padding: 80px;
	margin-left: -59px;
	margin-top: 20px;
	width: 800px;
	color: #fc8001;
}


.logo{
		

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



	</style>
</head>
<body class="fondo">


	<div class=" logo animated slideInDown delay-0s"></div>
	
	<div class="jumbotron login animated zoomIn delay-0s" >
		<h2>Login</h2>
		<hr>

		<form action="../php2/datos.php" method="post">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Usuario</label>
	    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Usuario" name="nombre">
	    
	  </div>
	  <div class="form-group">
	    <label for="Ingrese nombre Usuario">Contraseña</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Contraseña" name="contraseña">
	  </div>
	  <div class="form-group form-check">
	  </div>
	  <br>

	 
	<button type="submit" class="btn enviar">Entrar</button>

	<button type="submit" class="btn enviar"><a href="../index.php">volver al sitio </a></button>

	</form>
	<br>

	
		
	

	<div class="mensaje">
		
		<?php

		if (isset($_GET["error"]) ){
		 
			
			echo "<br>"."<div class='alert alert-warning' "; echo "role='alert'>";
				echo "los datos no son correctos"; 
			echo "</div>";
		
		} 

		?>



	</div>


	</div>

		





<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
