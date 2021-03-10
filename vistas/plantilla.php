<?php 

$url = Ruta::ctrRuta();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php


		$servidor = Ruta::ctrRutaServidor();

		$settings = ControladorPlantilla::ctrEstiloPlantilla();

		

		echo '<link rel="icon" href="'.$servidor.$settings["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();


		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$ruta = $rutas[0];

		}else{

			$ruta = "inicio";

		}

		$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);
		
		if(!$cabeceras["ruta"]){

			$ruta = "inicio";

			$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

		}

	?>
	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="<?php echo  $cabeceras['titulo']; ?>">

	<meta name="description" content="<?php echo  $cabeceras['descripcion']; ?>">

	<meta name="keyword" content="<?php echo  $cabeceras['palabrasClaves']; ?>">

	<title><?php echo  $cabeceras['titulo']; ?></title>

	<!--=====================================
	Marcado de Open Graph FACEBOOK
	======================================-->

	<meta property="og:title"   content="<?php echo $cabeceras['titulo'];?>">
	<meta property="og:url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta property="og:description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta property="og:image"  content="<?php echo $servidor.$cabeceras['portada'];?>">
	<meta property="og:type"  content="website">	
	<meta property="og:site_name" content="<?php echo $cabeceras["titulo"] ?>">
	<meta property="og:locale" content="es_PE">

	<!--=====================================
	Marcado para DATOS ESTRUCTURADOS GOOGLE
	======================================-->
	
	<meta itemprop="name" content="<?php echo $cabeceras['titulo'];?>">
	<meta itemprop="url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta itemprop="description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta itemprop="image" content="<?php echo $servidor.$cabeceras['portada'];?>">

	<!--=====================================
	Marcado de TWITTER
	======================================-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $cabeceras['titulo'];?>">
	<meta name="twitter:url" content="<?php echo $url.$cabeceras['ruta'];?>">
	<meta name="twitter:description" content="<?php echo $cabeceras['descripcion'];?>">
	<meta name="twitter:image" content="<?php echo $servidor.$cabeceras['portada'];?>">
	<meta name="twitter:site" content="@Jhamner">


	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/src/css/plugins/bootstrap.css">
	<!-- fontAwesome -->

	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/src/css/plugins/fontawesome/fontawesome.all.min.css">
    <!-- ======= Owl Carousel CSS ======= -->
    <link rel="stylesheet" href="<?php echo $url;?>vistas/src/css/plugins/owlcarousel/owl-carousel.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
	<!-- css personalizado -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/navik-menu.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/bar-menu.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/plantilla.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/footer.css')?>">

	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/whatsapp.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/formstyle.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;Utiles::auto_version('vistas/src/css/services.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>vistas/src/css/slide.css">
	

	 <!-- jQuery 3 -->
	<script src="<?php echo $url;?>vistas/src/js/plugins/jquery-3.5.1.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $url;?>vistas/src/js/plugins/bootstrap.min.js"></script>
	<!-- fontAwesome -->
	<script src="<?php echo $url;?>vistas/src/js/plugins/fontawesome/all.min.js"></script>
	<script src="<?php echo $url; ?>vistas/src/js/plugins/jquery.easing.js"></script>

	<!-- Js personalizado -->
	<script src="<?php echo $url;?>vistas/src/js/navik.menu.js"></script>



	<title></title>

</head>

<body onload="loaderPagina()">

	<div class="spinner-content" id="spinner-content" align="center">
	    <div class="spinner">
	        <div class="rect1"></div>
	        <div class="rect2"></div>
	        <div class="rect3"></div>
	        <div class="rect4"></div>
	        <div class="rect5"></div>
	    </div>
	</div>
<?php 
/*=============================================
MENU NAV
=============================================*/
require_once "vistas/modulos/nav/nav.php";




/*=============================================
CONTENIDO DINÁMICO
=============================================*/

	$rutas = array();
	$ruta = null;

    if(isset($_GET["ruta"])){

      $rutas = explode("/", $_GET["ruta"]);

      $ruta = $rutas[0];

    }else{

      $ruta = "inicio";

    }


	if(isset($_GET["ruta"])){

        if($rutas[0] == "inicio"){


			include "modulos/slide.php";
         	include "modulos/".$rutas[0].".php";

        }else{

          	include "modulos/".$rutas[0].".php";

        }
    }else{
    	include "modulos/slide.php";
    	include "vistas/modulos/inicio.php";
    }

    include 'vistas/modulos/modals/contacto.php';
    include 'vistas/modulos/footer.php';








 ?>
 <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<div id="whatsapp"></div>
<!-- ======= Google API ======= -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    <!-- ======= Owl Carousel JS ======= -->
<script src="<?php echo $url; Utiles::auto_version('vistas/src/js/plugins/owlcarousel/owl-carousel.js')?>"></script>
<!--=====================================
JAVASCRIPT PERSONALIZADO
https://web.whatsapp.com/send?phone=961482121&text=Hola,%20Busco%20un%20servicio%20de%20monitoreo
======================================-->
<script src="<?php echo $url; Utiles::auto_version('vistas/src/js/whatsapp.js')?>"></script>
<script src="<?php echo $url; Utiles::auto_version('vistas/src/js/plantilla.js')?>"></script>
<script src="<?php echo $url;?>vistas/src/js/slide.js"></script>

<!--=====================================
https://developers.facebook.com/
======================================-->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v8.0&appId=716693162393372&autoLogAppEvents=1" nonce="JhAbjf1e"></script>

<!--=====================================
WHATSAPP FLOTING
======================================-->

<script type="text/javascript">
    $(function () {
        $('#whatsapp').floatingWhatsApp({
            phone: '+51990415525',
            popupMessage: 'Hola, Hasnos tu consulta?',
            message: "Hola, Busco un servicio de monitoreo",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Bienvenido!',
            headerColor: '#075e54',
            backgroundColor: '#128C7E',
            buttonImage: '<img src="<?php echo $url; ?>vistas/src/images/whatsapp.svg"/>'
        });
    });
</script>
</body>
</html>