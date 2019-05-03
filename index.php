<?php

require "sobre_pedal/php2/conexion.php";

$sql = "SELECT * FROM secciones";

$result = mysqli_query($conect, $sql);

$row2 = mysqli_fetch_array($result);

$row3 = mysqli_fetch_array($result);

$row5 = mysqli_fetch_array($result);

$row6 = mysqli_fetch_array($result);

$row7 = mysqli_fetch_array($result);







?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sobre Pedal</title>
	<link rel="stylesheet" type="text/css" href="sobre_pedal/css/estilos.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="sobre_pedal/css/bootstrap.min.css">

	<script defer src="sobre_pedal/js/jquery-3.3.1.min.js"></script>

</head>
<body>



	<div id="portal">
	</div>

	<div class="inicio">
		<img src="sobre_pedal/img/inicio.png">
	</div>

	

		<div class="radky_pausa"></div>

		<div class="radky final">	</div>
		<div class="radky2 final"></div>
		


<section id="grande" width="100%">

	



	<section id="seccion1">

			<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>
		

		<div class="popUp">
			<img src="sobre_pedal/img/popUp.jpg">
			<i class="cerrar fas fa-times-circle"></i>
		</div>


		<div id="avisoRA">
			<img src="sobre_pedal/img/RA_diseno.png">
			<i class="cerrar fas fa-times-circle"></i>

		</div>


	
 		<div class="aficheGrande">
 			<i class="cerrar fas fa-times-circle"></i>
			<img src="sobre_pedal/img/aficheGrande.png">
		</div>

		<div class="afiche">
		</div>

		<div class="reloj">
		</div>

		<div class="contedor_txt">
			<i class="btnTxt b1 fas fa-comment"></i>
			<div class="CuadroTxt">
				<p> 
				Es momento de conocer a los amigos de mi abuelo, las personas más influyentes del ciclismo.
				Con este reloj, podre ir al pasado y asi enterarme de lo que realmente sucedió durante
				estas épocas.
				</p>

			</div>
		</div>


	</section>


	<section id="seccion2">

			<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>
		<div class="contenidoGif">
			<i class="cerrar cgif fas fa-times-circle"></i>
			
				<img src="sobre_pedal/img/Gif_parque_terminado.gif" width="60%">
	
		</div>

		<div class="fecha f1"><h1>
			
			<?php

			
				echo $row2["fecha"];
			

			?>

		</h1></div>

		<div class="james">
				
			<?php

	echo "<img src='" . "sobre_pedal/" . $row2["foto"] 
			. "'>";

			?>
		</div>
		<i class="btnTxt b2 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 radkytxt">
				<p class="contenidoR"> 
				Disculpe<br>¿es usted James Moore, el ganador de la primera carrera de ciclismo?
				</p>
				<i class="siguiente Dsig1 fas fa-arrow-circle-right"></i>
				<i class="siguiente Dsig2 fas fa-arrow-circle-right"></i>

			</div>

		</div>


		<i class="btnTxt b3 fas fa-comment"></i>

		<div class="contedor_txt2 jamesConTxt">
			<div class="CuadroTxt2 jamesTxt">
				<p class="contenidoj">
				Si soy yo. <br> ¿tambien sabias que en este parque
				fue en donde se realizó la carrera?
				</p>

				<div id="pequeñoGif">
					<img src="sobre_pedal/img/imagenPequeñaGif.png">
				</div>
				<div class="intervinculo">Ver Historia</div>

				<i class="siguiente Isig1 fas fa-arrow-circle-left"></i>

			</div>

		
		</div>
		
	</section>

	<section id="seccion3">
			<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>

		<div class="fecha f2"><h1>
			

			<?php

			
				echo $row3["fecha"];
			

			?>

		</h1>
	</div>

		<div class="james">
			<?php

	echo "<img src='" . "sobre_pedal/" . $row3["foto"] 
			. "'>";

			?>
		</div>
		
		<div class="peter">
			<img src="sobre_pedal/img/sprites/peter.png">
		</div>

		<i class="btnTxt b4 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 radkytxt2">
				<p class="contenidoR2"> 
				¿Begth?<br>¡Hola!<br>Vine para ver que  encontraba acerca del ciclismo y de paso conocer los amigos de mi abuelo.
				</p>
				<i class="siguiente Dsig3 fas fa-arrow-circle-right"></i>
		

			</div>

		</div>

<i class="btnTxt b5 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 bengtxt">
				<p class="contenidoB"> 
				¿Eres tú Radky?,<br> ¿Que haces por aquí?.

				</p>
				<i class="siguiente Dsig4 fas fa-arrow-circle-right"></i>
				<i class="siguiente Isig2 fas fa-arrow-circle-left"></i>
			</div>

		</div>

		
		<i class="btnTxt b6 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 petertxt2">
				<p class="contenidoP"> 
			Hola Radky,<br>Gusto en conocerte,así que te apasiona el ciclismo, yo soy el que tuvo la idea de crear un campeonato en pista a nivel mundial.
				</p>

			</div>

		</div>

	</section>

	
	<section id="seccion4">

			<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>

		<div class="contenidoLibreria">
			<i class="cerrar cgif Clibreria fas fa-times-circle"></i>
			<img class="periodico_lightbox" src="sobre_pedal/img/periodico_lightbox.png">
	
		</div>

		<div class="fecha f3"><h1>1903</h1></div>

		<div class="libreria">

		</div>
	
	</section>

	<section id="seccion5">
		<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>
		<div class="tonelli"> 
			
			<?php
			echo " <img src='"  . "sobre_pedal/" . $row5["foto"] 
			. "'>";

			?>

		</div>
		<div class="fecha f4"><h1>
			
				<?php

			
				echo $row5["fecha"];
			

			?>

		</h1></div>

		<i class="btnTxt b7 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 radkytxt3">
				<p class="contenidoR5"> 
				 ¿Qué te sucede?</p>
				<i class="siguiente Dsig6 fas fa-arrow-circle-right"></i>
			</div>

		</div>


		<i class="btnTxt b8 fas fa-comment"></i>

		<div class="contedor_txt2 tonelliConTxt">
			<div class="CuadroTxt2 tonelliTxt">
				<p class="contenidoT">
					Ese tonto de Camillo, el Dueño del Periódico Corriere Della Sera, me a robado 
					mi idea, pero no dejaé las cosas asi, peleare por ella.
				</p>
				<div class="intervinculo intervinculoJuego">Ir</div>
			</div>	
		</div>
		<div class="juego">
			<img src="sobre_pedal/img/Invitación_juego.png" width="80%">
			<i class="cerrar cgif Clibreria cjuego fas fa-times-circle"></i>
		</div>
	</section>

<section id="seccion6">

		<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>

		<div class="fecha f5"><h1>
				<?php

			
				echo $row6["fecha"];
			

			?>

		</h1></div>



		<div class="gunnar">
			<?php
			echo " <img src='" . "sobre_pedal/" . $row6["foto"] 
			. "'>";

			?>
		</div>

		
		<div class="biciRural">
			<img src="img/bicicletaRural.png"width="80%">
		</div>

		<i class="btnTxt b9 fas fa-comment"></i>

		

		<div class="contedor_txt2">
			<div class="CuadroTxt2 radkytxt4">
				<p class="contenidoR3"> 
				¡Wooouw!<br>Que linda Bici.
				</p>
				<i class="siguiente Dsig5 fas fa-arrow-circle-right"></i>
				<i class="siguiente Dsigu6 fas fa-arrow-circle-right"></i>
				<i class="siguiente Dsigu7 fas fa-arrow-circle-right"></i>
				<i class="siguiente Dsigu8 fas fa-arrow-circle-right"></i>
			</div>

		</div>



<i class="btnTxt b10 fas fa-comment"></i>

		
		<div class="contedor_txt2">
			<div class="CuadroTxt2 gunnartxt">
				<p class="contenidoG"> 
				Oye, ¿Que te pasa?<br>Esa es mi bicicleta.
				</p>
				<i class="siguiente Isigu3 fas fa-arrow-circle-left"></i>
				<i class="siguiente Isigu4 fas fa-arrow-circle-left"></i>
				<i class="siguiente Isigu5 fas fa-arrow-circle-left"></i>
			</div>

		</div>



		
	</section>


	<section id="seccion7">

		<div id="Administrador">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.6;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		</div>

		<div class="contenidoGifBmx">
			<i class="cerrar cgifBmx fas fa-times-circle"></i>
			
				<img src="sobre_pedal/img/BmxGif.gif" width="60%">
	
		</div>

		<div class="fecha f6"><h1>
			

			<?php

			
				echo $row7["fecha"];
			

			?>


		</h1></div>

		<div class="motociclista">

			
			<?php

	echo "<img src='" . "sobre_pedal/" . $row7["foto"] 
			. "'>";

			?>




		</div>

		



		<i class="btnTxt b13 fas fa-comment"></i>

		<div class="contedor_txt2">
			<div class="CuadroTxt2 radkytxt4">

				<p class="contenidoS"> 
				Disculpa<br>Que te ocurre?
				</p>
				<i class="siguiente Dsig10 fas fa-arrow-circle-right"></i>
				<i class="siguiente Dsig11 fas fa-arrow-circle-right"></i>
				



			</div>

		</div>



		<i class="btnTxt b14 fas fa-comment"></i>


		<div class="contedor_txt2">
			<div class="CuadroTxt2 motociclistaTxt">

				<p class="contenidoS">
				 No puedo creer que un niño sea mejor que yo, usando una simple bicicleta.
				</p>

				<div id="pequeñoGifBmx">
					<img src="sobre_pedal/img/imgPequeñoGif.png">
				</div>
				<div class="intervinculo1">Ver Historia</div>

				<i class="siguiente Isig3 fas fa-arrow-circle-left"></i>



			</div>

		</div>


	</section>

	<footer id="final">
			
		<div class="logo">
			<img src="sobre_pedal/img/logo.png" width="90%">
			
		</div>
	
		<div class="Administrador">
				<div id="ContenedorLogo">
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.8; ">
			<a href="sobre_pedal/php/contactanos.php" style="color: white;">
			Contactanos 
		</a>
		</button>

			<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.8;">
			<a href="sobre_pedal/php/registrate.php" style="color: white;">
			Registrarse 
		</a>
		</button>
		<button class="btn" style="float: right; background-color: #faa854; margin: 10px; opacity: 0.8;">
			<a href="sobre_pedal/php/nosotras.php" style="color: white;">
			Nosotras 
		</a>
		</button>
		</div>
			
		</div>
		
		<div class="gunnarSprites">
		</div>

		<div class="tonelliSprites">
		</div>
		
		<div class="jamesSprites"></div>

		<div class="camilloSprites"></div>

		<div class="petterSprites"></div>

		<div class="scottSprite"></div>

		<div class="radkyEnfrente">
			<img class="frente" src="sobre_pedal/img/radkyEnfrente.png">
		</div>

		


	</footer>

</section>




	<script defer src="sobre_pedal/js/codigo.js"></script>



</body>
</html>