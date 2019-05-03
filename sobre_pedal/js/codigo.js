$(document).ready(function(){
$(".b3").css({"display":"none"});
$(".b4").css({"display":"none"});
$(".b8").css({"display":"none"});
$(".intervinculo").css({"display":"none"});
$(".b5").css({"display":"block"});
$(".Dsig2").css({"display":"none"});
$(".Dsig4").css({"display":"none"});
$(".Dsigu6").css({"display":"none"});
$(".Dsigu7").css({"display":"none"});
$(".Isigu4").css({"display":"none"});
$(".Dsigu8").css({"display":"none"});
$(".Isigu5").css({"display":"none"});
$(".Isigu6").css({"display":"none"});
$(".b14").css({"display":"none"});
$(".Dsig11").css({"display":"none"});
$('body').addClass('quieto');

$(document).scroll(capturarScroll);
var posX = 0;

function capturarScroll(){

  posX = $(document).scrollLeft();
  console.log(posX);
  fechas();
  logo();
  redes();
  personajesCaminando();
  ra();
}


function ra(){
  if (posX == 40) {
      $("#avisoRA").css({"display":"block"});
      }
}


function fechas(){
  if(posX > 1067 && posX < 1400){
    $('.f1').fadeTo("slow",1).css({"display":"block", "fontSize" : "5em"});
    $('#avisoRA').css({"display":"none"});
    
  }else if(posX > 2462 && posX < 2716){
    $('.f2').fadeTo("slow",1).css({"display":"block"});
  }else if(posX > 3775 && posX < 4087){
    $('.f3').fadeTo("slow",1).css({"display":"block"});
  }else if(posX > 5203 && posX < 5458){
    $('.f4').fadeTo("slow",1).css({"display":"block"});
  }else if(posX > 6525 && posX < 6779){
    $('.f5').fadeTo("slow",1).css({"display":"block"});
  }else if(posX > 7936 && posX < 8142){
    $('.f6').fadeTo("slow",1).css({"display":"block"});
  }
}

function logo(){
  if(posX > 9496 && posX < 9562){
    $('.logo').css({"display":"block", "margin-top":"30px"});
  }
}

function redes(){
  if(posX > 9496 && posX < 9562){
    $('.redesSociales').css({"display":"block", "margin-top":"20px"});

  }
}

function personajesCaminando(){
  if (posX > 9496 && posX < 9562) {
    $('.gunnarSprites').css({"display":"block", "margin-left":"427px"});
    $('.tonelliSprites').css({"display":"block", "margin-left":"527px"});
    $('.jamesSprites').css({"display":"block", "margin-left":"627px"});
    $('.camilloSprites').css({"display":"block", "margin-left":"727px"});
    $('.petterSprites').css({"display":"block", "margin-left":"827px"});
    $('.scottSprite').css({"display":"block", "margin-left":"927px"});
  }
  else if (posX >= 9562) { 
  $('.radkyEnfrente').css({"display":"block", "margin-left":"333px"});
  $('.final').css({"display":"none"});
  $('.gunnar').css({"display":"none"});
  $('.tonelli').css({"display":"none"});
  $('.peter').css({"display":"none"});
  $('.james').css({"display":"none"});
  } 
  else if (posX >= 6800) {
    $('.gunnarSprites2').css({"display":"block"});
  }
}

document.onkeydown = pulsarTecla
document.onkeyup = soltarTecla

function pulsarTecla() {
		var teclaIE = event.keyCode
	if (teclaIE == 39 && posX < 9561) {
        $('.radky').css({'display':'block'});
				$('.radky_pausa').css({"display":"none"});
				$('.radky_pausa2').css({"display":"none"});
				$('.radky2').css({"display":"none"});
        $('.radkyEnfrente').css({"display":"none"});
        $('body').removeClass('quieto');


				$(".radky").css({"animationPlayState":'running'});}
	if (teclaIE == 37) {$('.radky2').css({'display':'block'});
				$('.radky_pausa').css({"display":"none"});
				$('.radky_pausa2').css({"display":"none"});
				$('.radky').css({"display":"none"});
				$(".radky2").css({"animationPlayState":'running'});
      $('body').removeClass('quieto');
    }
         if (teclaIE ==37 && posX <= 9562){
              $('.radkyEnfrente').css({"display":"none"}).fadeOut('fast');}
      }
     

      


function soltarTecla() {
	
	$(".radky").css("animationPlayState","paused");
		$(".radky2").css("animationPlayState","paused");
    $('body').addClass('quieto');
		
};

	$(".inicio").click(function(){
		$(".inicio").slideUp(1000);
	});


    $(".afiche").click(function(){
    	$(".aficheGrande").fadeIn('fast');
    	$(".aficheGrande").css({"background":"rgba(83,71,65,0.7)"})
    	;});


   $(".cerrar").click(function(){
   	$(".popUp").fadeOut('fast');
   	$(".aficheGrande").fadeOut('fast');
    $("#avisoRA").fadeOut('fast');
   });

   $(".reloj").click(function(){
      $("#portal").fadeIn('fast').css({"display":"block"});
    });

   $(".cgif").click(function(){
   	$(".contenidoGif").fadeOut('fast');
    $("#portal").css({"display":"none"});
   });

   $(".cgifBmx").click(function(){
    $(".contenidoGifBmx").fadeOut('fast');
   });

   $(".b1").click(function(){
   	$(".CuadroTxt").fadeIn('fast');
   	$(".CuadroTxt").fadeIn('fast').css({"display":"none"});

   });

 $(".b2").click(function(){
   	$(".radkytxt").fadeIn('fast');
   	$(".radkytxt").fadeIn('fast').css({"display":"none"});
   	$(".jamesTxt").css({"display":"none"});

   });

 $(".b3").click(function(){
 	$(".jamesTxt").css({"display":"none"});
 });

  $(".b4").click(function(){
  $(".radkytxt2").css({"display":"block"});
 });

  $(".b5").click(function(){
  $(".bengtxt").css({"display":"block"});
 });

  $(".b6").click(function(){
  $(".petertxt2").css({"display":"none"});
 });

  $(".b7").click(function(){
  	$(".radkytxt3").fadeIn('fast').css({"height" : "90px"});
  });

  $(".b8").click(function(){
  	$(".tonelliTxt").fadeOut('fast');
  });

 $(".Dsigu6").click(function(){
  $(".b10").css({"display":"block"});
  $(".b9").css({"display":"none"});
$(".Isigu3").css('display', 'none');
$(".Isigu4").css('display', 'block');
   $(".Isigu4").css('padding-top', '10px');
  $(".gunnartxt").fadeIn('fast').css({"display":"block"});
  $(".radkytxt4").css({"display":"none"});
  $(".contenidoG").text('Disculpame, estoy algo tenso por lo de la carrera.');
   });

$(".Isigu3").click(function(){
  $(".gunnartxt").css({"display":"none"});
  $(".radkytxt4").css({"display":"block"});
  $(".contenidoR3").text('Lo siento, solo la miraba.');
  $(".b9").css({"display":"block"});
  $(".b10").css({"display":"none"});
  $(".Dsig5").css({"display":"none"});
  $(".Dsigu6").css({"display":"block"});
 });

 $(".Isigu4").click(function(){
  $(".gunnartxt").css({"display":"none"});
  $(".radkytxt4").css({"display":"block"});
  $(".contenidoR3").text('¿De casualidad es el campeonato mundial en ruta?.');
  $(".b9").css({"display":"block"});
  $(".b10").css({"display":"none"});
  $(".Dsigu6").css({"display":"none"});
  $(".Dsigu7").css({"display":"block"});
  $(".Dsigu7").css('padding-top', '10px');
 });

 $(".b9").click(function(){
  $(".radkytxt4").css({"display":"block"});
 });

 $(".b10").click(function(){
  $(".gunnartxt").css({"display":"none"});
 });
  $(".Dsig5").click(function(){
   $(".b10").css({"display":"block"});
    $(".b9").css({"display":"none"});
    $(".gunnartxt").fadeIn('fast').css({"display":"block"});
    $(".radkytxt4").css({"display":"none"});

   });

  $(".Dsigu7").click(function(){
  $(".b10").css({"display":"block"});
  $(".b9").css({"display":"none"});
  $(".Isigu4").css('display', 'none');
  $(".Isigu5").css('display', 'block');
  $(".Isigu5").css('padding-top', '20px');
  $(".gunnartxt").fadeIn('fast').css({"display":"block"});
  $(".radkytxt4").css({"display":"none"});
  $(".gunnartxt").css('fontSize', '14pt');
  $(".contenidoG").text('¡Siiiii!, ¿Cómo lo sabes?.');
   });

$(".Isigu5").click(function(){
  $(".gunnartxt").css({"display":"none"});
  $(".radkytxt4").css({"display":"block"});
  $(".contenidoR3").text(' Mi abuelo me habló sobre esta carrera.');
  $(".b9").css({"display":"block"});
  $(".b10").css({"display":"none"});
  $(".Dsigu7").css({"display":"none"});
  $(".Dsigu8").css({"display":"block"});
  $(".Dsigu8").css('padding-top', '10px');
 });

$(".Dsigu8").click(function(){
  $(".b10").css({"display":"block"});
  $(".b9").css({"display":"none"});
  $(".Isigu5").css('display', 'none');
  $(".gunnartxt").fadeIn('fast').css({"display":"block"});
  $(".radkytxt4").css({"display":"none"});
  $(".gunnartxt").css('fontSize', '14pt');
  $(".contenidoG").text('¡Que bien!, Me tengo que ir, ganaré esta carrera.');
 
   });

	$(".Dsig6").click(function(){
	$(".intervinculo").css({"display":"block"});
  	$(".b8").css({"display":"block"});
  	$(".radkytxt3").fadeOut('fast');
  	$(".tonelliTxt").fadeIn('fast').css({"display":"block" , "height":"200px"});
    $(".contenidoR5").css({"display":"block"});
  });

 $(".Dsig1").click(function(){
  	$(".b3").css({"display":"block"});
 	$(".jamesTxt").fadeIn('fast');
   	$(".jamesTxt").fadeIn('fast').css({"display":"none"});
   	$(".radkytxt").css({"display":"none"});

   });


 $(".Isig1").click(function(){
 	$(".radkytxt").css({"display":"block","height" : "225px"});
 	$(".contenidoR").text('¿En serio? Me podrias contar como fue esta carrera');
 	$(".jamesTxt").css({"display":"none"});
 	$(".Dsig1").css({"display":"none"});
 	$(".Dsig2").css({"display":"block"});
 });

 $(".Dsig2").click(function(){
 	$(".intervinculo").css({"display":"block"});
 	$(".Isig1").css({"display":"none"});
 	$(".radkytxt").fadeOut('fast');
 	$(".jamesTxt").css({"display":"block","height":"180px"});
 	$(".contenidoj").css({"display":"none"});
 	$("#pequeñoGif").css({"display":"block"});
 });

  $(".Dsig3").click(function(){
  $(".b5").css({"display":"block"});
  $(".b4").css({"display":"none"});
  $(".bengtxt").fadeIn('fast');
  $(".Isig2").css('padding-top', '10px');
  $(".radkytxt2").fadeOut('fast').css({"display":"none"});
  $(".contenidoB").text('¡Que bien te presento a Peter, él te puede ayudar!.');
  $(".Isig2").css({"display":"none"});
  $(".Dsig4").css({"display":"block"});
  $(".Dsig4").css('padding-top', '10px');
   });


  $(".Dsig4").click(function(){
  $(".b5").css({"display":"none"});
  $(".bengtxt").css({"display":"none"});
  $(".petertxt2").css({"display":"block"});
  $(".b6").css({"display":"block"});
   });

    $(".Isig1").click(function(){
 	$(".radkytxt").css({"display":"block","height" : "120px"});
 	$(".contenidoR").text('¿En serio? Me podrias contar como fue esta carrera');
 	$(".jamesTxt").css({"display":"none"});
 	$(".Dsig1").css({"display":"none"});
 	$(".Dsig2").css({"display":"block"});
 });

$(".Isig2").click(function(){
  $(".bengtxt").css({"display":"none"});
  $(".radkytxt2").css({"display":"block"});
  $(".b5").css({"display":"none"});
   $(".b4").css({"display":"block"});
 });


 $(".Dsig2").click(function(){
 	$(".intervinculo").css({"display":"block"});
 	$(".Isig1").css({"display":"none"});
 	$(".radkytxt").fadeOut('fast');
 	$(".jamesTxt").css({"display":"block","height":"180px"});
 	$(".contenidoj").css({"display":"none"});
 	$("#pequeñoGif").css({"display":"block"});
 });

 $(".intervinculo").click(function(){
 	$(".contenidoGif").css({"display":"block"}).fadeIn('fast');
 });

 $(".intervinculo1").click(function(){
  $(".contenidoGifBmx").css({"display":"block"}).fadeIn('fast');
 });

$(".libreria").click(function(){
	$(".contenidoLibreria").css({"display":"block"}).fadeIn('fast');
	$(".periodico_lightbox").css({"display":"block"});
});

 $(".Clibreria").click(function(){
 	$(".contenidoLibreria").css({"display":"none"}).fadeOut('fast');
 });
 
 $(".intervinculoJuego").click(function(){
 	$(".juego").css({"display":"block"});
 });

  $(".cjuego").click(function(){
	 $(".juego").fadeOut('fast');
    });





  $(".b13").click(function(){
    $(".radkytxt4").fadeIn('fast');
    $(".radkytxt4").fadeIn('fast').css({"display":"none"});

   });

  $(".b14").click(function(){
    $(".motociclistaTxt").fadeIn('fast');
    $(".motociclistaTxt").fadeIn('fast').css({"display":"none"});
    $(".radkytxt4").css({"display":"block"});
  });


  $(".Dsig10").click(function(){
    $('.Dsig10').css({"display":"none"});
    $(".b14").css({"display":"block"});
    $(".motociclistaTxt").fadeIn('fast').css({"display":"block"});
    $(".radkytxt4").css({"display":"none"});
    $(".b13").css("display","none");
    $(".intervinculo1").css({"display":"none"});


   });
 
  

 $(".Isig3").click(function(){
  $(".radkytxt4").css({"display":"block","height" : "120px"});
  $(".contenidoS").text('podrias contarme lo que sucedió');
  $(".motociclistaTxt").css({"display":"none"});
  $(".Dsig10").css({"display":"none"});
  $(".Dsig11").css({"display":"block"});
  $(".b13").css("display","block");
  $(".b14").css("display","none");
  $("#pequeñoGifBmx").css({"display":"none"});

 });

 $(".Dsig11").click(function(){
  $(".intervinculo1").css({"display":"block"});
  $(".Isig3").css({"display":"none"});
  $(".radkytxt4").fadeOut('fast');
  $(".motociclistaTxt").css({"display":"block","height":"180px"});
  $(".contenidoS").css({"display":"none"});
  $("#pequeñoGifBmx").css({"display":"block"});
  $(".b14").css("display","block");
  $(".b13").css("display","none"); 
  $(".radkytxt4").css({"display":"none"});

 });

});