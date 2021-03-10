<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid">

	<div class="container">

		<div class="row">

		 	<!--=====================================
			IZQUIERDA
			======================================-->

			<div class="col-lg-5 col-md-6 col-xs-12 footerCategorias">
			    <!-- Start Map -->
			    <div class="map" data-trigger="map"
			        data-map-options='{"latitude": "-7.1601562", "longitude": "-78.5054044", "zoom": "11"}'>
			    </div>
			    <!-- End Map -->
			</div>

			<!--=====================================
			DATOS CONTACTO
			======================================-->

			<div class="col-md-3 col-sm-6 col-xs-12 text-left infoContacto">
				
				<h5>Dudas e inquietudes, contáctenos en:</h5>

				<br>
				
				<h5>
				<?php 

					$datosEmpresa = ControladorPlantilla::ctrEstiloPlantilla();

					$datos = json_decode($datosEmpresa["empresa"],true);		


//					var_dump($datos);
					foreach ($datos as $key => $value) {


						echo '<i class="fa fa-phone-square" aria-hidden="true"></i> '.$value["telefono"].'

							<br><br>

							<i class="fa fa-envelope" aria-hidden="true"></i> '.$value["correo"].'

							<br><br>

							<i class="fa fa-map-marker" aria-hidden="true"></i> '.$value["direccion"].'

							<br><br>
							'.$value["provincia"].' | '.$value["pais"].'';

					}

				 ?>
				
					
					

				</h5>



			</div>

			<!--=====================================
			FORMULARIO CONTÁCTENOS
			======================================-->

			<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 formContacto">
				




			</div>
			
		</div>

	</div>

</footer>


<!--=====================================
FINAL
======================================-->

<div class="container-fluid final">
	
	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-6 col-xs-12 text-left text-muted">
				
				<h5>&copy; <?php echo date("Y"); ?> Todos los derechos reservados. Sitio elaborado por JS Development</h5>

			</div>

			<div class="col-sm-6 col-xs-12 text-right social ">
				
			<ul class="social-links">

			<?php
				
			$social = ControladorPlantilla::ctrEstiloPlantilla();

				$jsonRedesSociales = json_decode($social["redesSociales"],true);		

				foreach ($jsonRedesSociales as $key => $value) {

					echo '<li>
							<a style="color:#fff;" href="'.$value["url"].'" class="'.$value["estilo"].' social-'.$value["red"].'"  target="_blank">
								<i class="fab fa-'.$value["red"].' redSocial" aria-hidden="true"></i>
							</a>
						</li>';
				}

			?>

			</ul>

			</div>

		</div>

	</div>

</div>


