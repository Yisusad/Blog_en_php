<!--=====================================
REDES SOCIALES PARA MÓVIL
======================================-->

<div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">
				
	<ul class="d-flex justify-content-center p-0">
		
	<?php
			#Recorrer el array de redes sociales
			#Esto elimina cualquier carácter de control de la cadena antes de intentar decodificar el JSON.
			$redes_sociales_cleaned = preg_replace('/[[:cntrl:]]/', '', $blog["redes_sociales"]);
			$redes_sociales = json_decode($redes_sociales_cleaned, true, 512);

						
			foreach ($redes_sociales as $key => $value) {
							
				echo '<li>
						<a href="'.$value["url"].'" target="_blank">
							<i class="'.$value["icono"].' lead rounded-circle text-white mr-3 mr-sm-4"></i>
						</a>
					</li>';
			}

	?>

	</ul>

</div>