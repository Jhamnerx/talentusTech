<!--=====================================
TOP
======================================-->

<?php 
$url = Ruta::ctrRuta();
$social = ControladorPlantilla::ctrEstiloPlantilla();

$jsonRedesSociales = json_decode($social["redesSociales"],true);
//var_dump($jsonRedesSociales);
?>


<header class="main-header  barraSuperior">
	<div class="container">
		<div class="row">


			<div class="col-md-12">
				<div class="user-links clearfix">
					<div class="social-links">
						<?php 

						foreach ($jsonRedesSociales as $key => $value) {

							if($value["activo"] != 0){

								echo '<a href="'.$value["url"].'" class="'.$value["estilo"].' social-'.$value["red"].'" target="_blank">
										<i class="fab fa-'.$value["red"].'"></i>


									  </a>';

							}


						} ?>
					</div> <!-- .social -->
					<div class="secondary-menu">
						<a target="_blank" href="http://www.talentustechnology.com/talentus/inicio">Sistema</a>
						<a target="_blank" href="http://209.127.178.254:8080/track/Track">TyT GPS</a>
						<a href=""></a>
					</div> <!-- .secondary-menu -->	
				</div> <!-- .user-links -->
			</div>

		</div> <!-- .row -->
	</div> <!-- .container -->
</header> <!-- .main-header -->


<!-- Header Menu -->
<div class="navik-header header-shadow">
	<div class="container">

		<!--  header -->
		<div class="navik-header-container">
			
			<!--Logo-->
            <div class="logo" data-mobile-logo-final="<?php echo $url; ?>vistas/src/images/logo-final.png" data-sticky-logo-final="<?php echo $url; ?>vistas/src/images/logo-final.png">
            	<a href="#"><img src="<?php echo $url; ?>vistas/src/images/logo-final.png" alt="logo-final"/></a>
			</div>
			
			<!-- menu -->
			<div class="burger-menu">
				<div class="line-menu line-half first-line"></div>
				<div class="line-menu"></div>
				<div class="line-menu line-half last-line"></div>
			</div>

			<!-- menu-->
            <nav class="navik-menu menu-caret menu-hover-4 submenu-top-border submenu-scale">
            	<ul>
                	<li class="inicio"><a href="inicio">INICIO</a>
                    </li>
					<li class="plataforma"><a href="plataforma">PLATAFORMA</a></li>
                    <li class="para-quien-es"><a href="para-quien-es">¿PARA QUIEN ES?</a></li>
                    <li class="soluciones"><a href="soluciones">SOLUCIONES/PRODUCTOS</a></li>
					<li class="contacto"><a href="contacto">CONTACTO</a>
					<!-- <li class="contacto submenu-right"><a href="contacto">CONTACTO</a> -->
<!-- 						<ul>
                        	<li><a href="#">Dropdown menu</a></li>
							<li><a href="#">Dropdown menu</a></li>
							<li><a href="#">Dropdown menu</a></li>
                            <li><a href="#">Dropdown menu</a></li>
                        </ul> -->
					</li>
                </ul>
            </nav>

		</div>

	</div>
</div>