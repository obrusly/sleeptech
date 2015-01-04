<?php  
	$cachefile = 'cache/cache.php';    
	$cachetime = 10;    
	if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {  
		//echo "cache";	 
		include($cachefile);        
		exit;
	}   
	ob_start();
?>
<!DOCTYPE html>
<html manifest="cache.manifest"> 
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Divino SleepTECH</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' /> 
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="estilos.css" />

	<link rel="icon" type="image/ico" href="images/favicon.png" />

	<!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<![endif]-->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-57106033-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div class="mask"><div id="loader"></div></div>

	<div class="header">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" id="logotech" class="scroll-top">
					<img src="images/logo.jpg" />
				</a>
			</div>

			<div id="main-nav" class="collapse navbar-collapse">
				<ul id="top-menu" class="nav navbar-nav">
					<li><a href="#" class="scroll-link" data-id="atmo">ATMO<b>SPHERE</b></a></li>
					<li><a href="#" class="scroll-link" data-id="inbalance">IN<b>BALANCE</b></a></li>
					<li><a href="#" class="scroll-link" data-id="spinup">SPIN<b>UP</b></a></li>
					<li><a href="#" class="scroll-link" data-id="latexzone">LATEX<b>ZONE</b></a></li>
					<li><a href="#" class="scroll-link" data-id="smarthealth">SMART<b>HEALTH</b></a></li>
					<li><a href="#" class="scroll-link" data-id="personaliza">PERSONALIZÁ TU SET</a></li>
					<li><a href="#" class="scroll-link" data-id="garantia">GARANTÍA</a></li>
					<li><a href="#" class="scroll-link" data-id="contacto">CONTACTO</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<a href="http://www.divino.com.uy/" target="_blank">
		<img class="logoDivino" src="images/logoDivino.jpg" />
	</a>

	<div id="intro" class="page-section intro">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive logoSleepTech" src="images/logo_sleeptech.png" />
				<h3>
					LLEGA UN NUEVO MUNDO DE<br> OPCIONES EN DESCANSO, CREADAS<br> SÓLO PARA COMPLACERTE.
				</h3>
				<p>
					En Divino desarrollamos una generación evolucionada de colchones, la primera que te permite elegir entre sus componentes para armar el set de descanso a tu gusto.<br />
					Compuesta por: <b>cinco núcleos</b> con materiales y procesos de vanguardia para generar una experiencia inigualable, <b>tres fundas desmontables</b> con géneros naturales y <b>dos opciones de tapizados y patas de boxes</b>, que satisfacen las necesidades de la vida moderna y los requerimientos del consumidor más exigente.
				</p>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<img src="images/colchonHome2.jpg" class="img-responsive" />
			</div>
			
			<div class="col-xs-12 logosSleepTech">
				<div class="col-xs-12 col-sm-2 col-sm-offset-1">
					<a href="#" class="scroll-link" data-id="atmo">
						<img src="images/logo_atmosphere.png" class="img-responsive" />
					</a>
				</div>
				<div class="col-xs-12 col-sm-2">
					<a href="#" class="scroll-link" data-id="inbalance">
						<img src="images/logo_inbalance.png" class="img-responsive" />
					</a>
				</div>
				<div class="col-xs-12 col-sm-2">
					<a href="#" class="scroll-link" data-id="spinup">
						<img src="images/logo_spinup.png" class="img-responsive" />
					</a>
				</div>
				<div class="col-xs-12 col-sm-2">
					<a href="#" class="scroll-link" data-id="latexzone">
						<img src="images/logo_latexzone.png" class="img-responsive" />
					</a>
				</div>
				<div class="col-xs-12 col-sm-2">
					<a href="#" class="scroll-link" data-id="smarthealth">
						<img src="images/logo_smarthealth.png" class="img-responsive" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="atmo">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="atmo" class="page-section tipoColchonA">
		<div class="container">			
			<div class="col-xs-12 col-sm-6">

				<div class="altnube"></div>
				<img class="img-responsive" src="images/logoColchones2.png" style="max-width:318px;"/>
				<h3 class="newh3">
					DORMIR EN LA SUAVIDAD<br> DE UNA NUBE
				</h3>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<a href="#" class="scroll-link" data-id="atmo2" id="more">
					<img src="images/more.png" />
				</a>
				<p class="nombrepersona">
					“Yo elijo la delicadeza<br> 
					del nuevo ATMO<b>SPHERE</b>”.<br>
					<b>Victoria Rodríguez</b>. Comunicadora.
				</p>
				<img class="persona" src="images/persona1.png" />
			</div>    
			
			
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="atmo2">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="atmo2" class="page-section tipoColchonB">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p>
					El colchón <b>ATMOSPHERE</b> disipa la presión del cuerpo uniformemente en toda su superficie porque se amolda a él de manera envolvente. Además genera un fresco confort al tacto gracias a pequeñas partículas de gel inyectadas en la espuma viscoelástica. Cuenta con una gran adaptabilidad y memoria, lo que favorece un descanso relajado con una sensación de estar en el aire.<br /><br />
					Está recomendado para aquellos que gustan de un confort de ensueño, delicado y mullido, con efecto nube.
				</p>
			</div>
			<div class="col-xs-12 descripcion">
				<div class="col-xs-12 col-sm-6">
					<img class="img-responsive" src="images/desc_atmosphere.png" />
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="altnube"></div>
					<img class="img-responsive" src="images/atom2.jpg" />
				</div>    
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="inbalance">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="inbalance" class="page-section tipoColchonA">
		<div class="container">
			<div class="col-xs-12 col-sm-6">	
				<div class="altnube"></div>
				<img class="img-responsive" src="images/inbalances.png" style="max-width:275px;"/>
				<h3 class="newh3">
					EQUILIBRADA<br> Y SILENCIOSA ARMONÍA
				</h3>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<a href="#" class="scroll-link" data-id="inbalance2" id="more">
					<img src="images/more.png" />
				</a>
				<p class="nombrepersona">
					“Con <b>InBALANCE</b> duermo<br>
					en total armonía”.<br>
					<b>Andy Vila</b>. Comunicadora.
				</p>
				<img class="persona" src="images/persona2.png" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="inbalance2">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="inbalance2" class="page-section tipoColchonB">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p>
					Con el colchón <b>InBALANCE</b> disfrutá de una gran sensación de armonía y bienestar, gracias a la tonicidad y al soporte individualizado de cada zona del cuerpo, que aporta su núcleo combinado de resortes pocket zona y espuma viscoelástica con gel.<br /><br />
					Está recomendado para quienes no les satisface el exceso de firmeza y apuestan principalmente al adaptabilidad en el descanso.
				</p>
				<p>
					<img class="img-responsive" src="images/desc_inbalance.png" />
				</p>
			</div>
			
			<div class="col-xs-12 col-sm-6">

				<div class="altnube"></div>
				<img class="img-responsive" src="images/inbalance2.jpg" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="spinup">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="spinup" class="page-section tipoColchonA">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<div class="altnube"></div>
				<img class="img-responsive" src="images/spinups.png" style="max-width:201px;"/>
				<h3 class="newh3">
					PLACENTERA<br> RENOVACIÓN<br> DE LA ENERGÍA<br> VITAL
				</h3>
			</div>
			<div class="col-xs-12 col-sm-6">
				<a href="#" class="scroll-link" data-id="spinup2" id="more">
					<img src="images/more.png" />
				</a>
				<p class="nombrepersona">
					“<b>SPINUP</b> me proporciona un sueño<br>
					totalmente reparador”.<br>
					<b>Diego Pérez</b>. Ex tenista profesional.
				</p>
				<img class="persona" src="images/persona3.png" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="spinup2">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="spinup2" class="page-section tipoColchonB">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p>
					Disfrutá cada noche de una experiencia saludable y enriquecedora con el colchón <b>SPINUP</b>. Su interior de espuma combinada ofrece un lujoso y placentero soporte, que brinda el confort ideal para un sueño extremadamente reparador cada noche, mientras su fina terminación de látex otorga un delicado y benéfico acabado de confort.<br /><br />
					Es perfecto para quienes tienen un nivel de actividad físico y/o mental exigente o simplemente para quienes se preocupan por consumir productos que mejoren su calidad de vida.
				</p>
				<p>
					<img class="img-responsive" src="images/desc_spinup.png" />
				</p>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<div class="altnube"></div>
					<img class="img-responsive" src="images/spinup2.jpg" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="latexzone">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="latexzone" class="page-section tipoColchonA">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<div class="altnube"></div>
				<img class="img-responsive" src="images/latexzone.png" style="max-width:286px;"/>
				<h3 class="newh3">
					DESCANSAR<br> FLOTANDO EN<br> EL ESPACIO
				</h3>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<a href="#" class="scroll-link" data-id="latexzone2" id="more">
					<img src="images/more.png" />
				</a>
				<p class="nombrepersona">
					“Elijo <b>LATEXZONE</b> porque disfruto<br> 
					de un descanso profundo”.<br>
					<b>Aldo Silva</b>. Comunicador.
				</p>
				<img class="persona" src="images/persona4.png" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="latexzone2">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="latexzone2" class="page-section tipoColchonB">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p>
					Gracias a su altísima facultad de adaptación al contorno del cuerpo y a su capacidad de balancear la presión en todos los puntos, el colchón <b>LATEXZONE</b> genera una sensación de ingravidez que se asemeja a un efecto de flotación o suspensión y proporciona una altísima facilidad de movimiento durante el sueño.<br /><br />
					Es ideal para todas las tallas y edades y especialmente recomendado para personas alérgicas por sus propiedades antibacteriales.
				</p>
				<p>
					<img class="img-responsive" src="images/desc_latexzone.png" />
				</p>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="altnube"></div>
				<img class="img-responsive" src="images/latexzone2.jpg" />
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="smarthealth">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="smarthealth" class="page-section tipoColchonA">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<?php
				$img_src = "images/smarthealths.png";
				echo '<img class="img-responsive" src="'.$img_src.'" style="max-width:332px;"/>';
				?>
				<h3 class="newh3">
					EL SOPORTE<br> QUE TU COLUMNA<br> NECESITA
				</h3>
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<a href="#" class="scroll-link" data-id="smarthealth2" id="more">
					<?php
					$img_src = "images/more.png";
					echo '<img src="'.$img_src.'" />';
					?>
				</a>
				<p class="nombrepersona">
					“El nuevo colchón <b>SMARTHEALTH</b><br>
					es ideal para mí”.<br>
					<b>Jorge Oyenard</b>. Chef.
				</p>
				<?php
				$img_src = "images/persona5.png";
				echo '<img class="persona" src="'.$img_src.'" />';
				?>
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextA">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="smarthealth2">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="smarthealth2" class="page-section tipoColchonB">
		<div class="container">
			<div class="col-xs-12 col-sm-6">
				<p>
					Sustentado en un núcleo extra firme y de gran resistencia, el colchón <b>SMARTHEALTH</b> brinda la estabilidad y contención necesaria para el buen reposo de la columna vertebral. Su capa de espuma viscoelástica otorga un toque de suavidad al confort.<br /><br />
					Recomendado para personas de talla grande o extragrande. Ideal para aquellos a quienes su médico ha recomendado un soporte especialmente rígido para cuidar su columna.
				</p>
				<p>
					<img class="img-responsive" src="images/desc_smarthealth.png" />
				</p>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="altnube"></div>
				<?php
				$img_src = "images/smarthealth2.jpg";
				echo '<img class="img-responsive" src="'.$img_src.'" />';
				?>
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="personaliza">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="personaliza" class="page-section">
		<div class="container">
			<ul id="tabs">
				<li class="active">BOXES</li>
				<li>FUNDAS</li>
			</ul>
			<ul id="tab">
				<li class="active">
					<div class="col-xs-12 col-sm-6" style="margin:0; padding:0;">
						<h3 class="newh3">
							LO MÁS MODERNO<br> TAMBIÉN VISTE<br> TU DORMITORIO
						</h3>
						<p>
							Para acompañar tu nuevo colchón, Divino ha desarrollado el box ideal que aporta no sólo la estructura necesaria para complementar el soporte perfecto sino que, además, a través de líneas elegantes y finas terminaciones, cada box brinda funcionalidad y viste el dormitorio de forma única.<br /><br />
							El nuevo concepto de box se aleja de la apariencia tradicional que ha tenido hasta ahora, cambiando su típica cubierta hecha en el mismo género que el colchón para ganar estilo propio a través de un tejido de tapicería en color asfalto o color ámbar, que acompaña la decoración del dormitorio de forma más moderna y elegante.  Dos alturas y patas a elección complementan el desempeño de un conjunto perfecto, de diseño europeo de vanguardia, en base a las últimas tendencias en descanso.
						</p>
					</div>

					<div class="col-xs-12 col-sm-6" style="margin:0; padding:0;">
						<?php
						$img_src = "images/texturas.png";
						echo '<img class="img-responsive" src="'.$img_src.'" />';
						?>
					</div>    

				</li>
				<li>

					<div class="col-xs-12" style="margin:0; padding:0;">
						<h3 class="newh3">
							FUNDAS DESMONTABLES
						</h3>
						<p>
							Cada funda está elaborada con tejidos naturales que no se frizan. Además cuenta con una banda lateral en tela 3D para una mejor ventilación del interior del colchón y un cierre que permite quitarla para ser lavada en seco.
						</p>

						<div class="col-xs-4" style="margin:0; padding:10px;">
							<p>
								<b>BAMBÚ</b>
							</p>    
							<p style="font-weight:500">
								Pura naturaleza en la cama
							</p>
							<p>
								<img src="images/fundas1.png">
							</p>
							<p>
								El bambú es una fibra orgánica completamente natural elaborada sin pesticidas. Al ser 100% natural, es fresca, respirable y permeable, por lo que absorbe la humedad corporal al dormir. Su estructura molecular genera iones negativos que activan la circulación sanguínea promoviendo así un descanso reparador. Es resistente a bacterias y hongos, lo que lo convierte en un material ideal para personas alérgicas.
							</p>
						</div>

						<div class="col-xs-4" style="margin:0; padding:10px;">
							<p>
								<b>PURE SILK®</b>
							</p>    
							<p style="font-weight:500">
								Suave como una segunda piel
							</p>
							<p>
								<img src="images/fundas2.png">
							</p>
							<p>
								Las fundas Pure Silk son fabricadas con pura seda natural, lo que explica su magnífico brillo, su elegancia y su extrema suavidad. Las proteínas presentes en la seda son similares a las de nuestra piel por lo que generan una afinidad natural con ella, brindando así un descanso absolutamente exquisito y confortable.
							</p>
						</div>

						<div class="col-xs-4" style="margin:0; padding:10px;">
							<p>
								<b>TENCEL®</b>
							</p>    
							<p style="font-weight:500">
								Voluminoso, ligero y ecológico
							</p>
							<p>
								<img src="images/fundas3.png">
							</p>
							<p>
								Tencel es la primera fibra procedente de la madera y fabricada en forma totalmente ecológica. Se trata de un hilo conformado por un gran número de pequeñas fibras naturales entrelazadas, que le otorgan un volumen especial al tejido, al igual que un inigualable confort y suavidad. Es perfecta para personas de piel sensible y niños pequeños ya que es antialérgica.
							</p>
						</div>    

					</div>



				</li>
			</ul>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="garantia">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="garantia" class="page-section">
		<div class="container">
			<div class="something-semantic">
				<div class="something-else-semantic">
					<div class="col-xs-3"></div>
					<div class="col-xs-12 col-sm-6">
						<h3 class="newh3" style="text-align:center;">
							GARANTÍA DE SATISFACCIÓN
						</h3>
						<p>
							Cada conjunto está respaldado durante 10 años por todo defecto de fabricación. Además, nuestra garantía ofrece 30 días desde su fecha de compra para cambiar el interior del colchón SleepTECH si el cliente no se encontrase satisfecho con el grado de confort que el producto le otorga al descansar. Nuestra garantía de satisfacción es única en la industria del descanso.
						</p>
					</div>
					<div class="col-xs-3"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="contacto">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<div id="contacto" class="page-section">
		<div id="contact-parallax" class="parallax">
			<div class="parallax-overlay">
				<div class="container">
					<div class="contact-details">
						<div class="company-phone">
							<a style="text-decoration:none;">
								<?php
								$img_src = "images/celular.png";		
								echo '<img src="'.$img_src.'" />';
								?>
								0800 3484
							</a>
						</div>
						
						<i>
							<?php
							$img_src = "images/contact.png";
							echo '<img src="'.$img_src.'" />';
							?>
						</i>
						
						<h5 class="company-email">info@divino.com.uy</h5>
						
						<i>
							<?php
							$img_src = "images/markerch.png";
							echo '<img src="'.$img_src.'" />';
							?>
						</i>
						
						<h5 class="company-address">
							<b>Casa Central:</b> Irlanda 2014 esquina Av. Italia<br>
							<b>Punta Carretas Shopping:</b> José Ellauri 350<br>
							<b>Montevideo Shopping:</b> Luis Alberto de Herrera 1290<br>
							<b>Costa Urbana:</b> Avda. Giannattasio, km 21<br>
							<b>Punta Shopping:</b> P.7 Playa Mansa, Av. Roosevelt, Punta del Este<br>
						</h5>

					</div>
					
				</div>    
			</div>
		</div>
		<div class="container">
			<h3 class="newh3">
				Agendá tu visita
			</h3>     
			<div id="contact-formular">
				<div class="col-xs-12 col-sm-6" style="margin:0; padding:0;">  

					<form id="form" action="" method="post">
						<input placeholder="Nombre y Apellido" type="text" name="name" required>
						<input placeholder="E-mail" type="email" name="email" required>
						<input placeholder="Teléfono / Celular" type="tel" name="phone" required>
						<div class="selectDiv">
							<span class="selectDefault"></span>
							<select name="hora" id="hora" class="selectBox" required>
								<option value="" selected="selected" class="defualt-text">Seleccione un horario</option>
								<option value="10:00">10:00</option>
								<option value="11:00">11:00</option>
								<option value="12:00">12:00</option>
								<option value="13:00">13:00</option>
								<option value="14:00">14:00</option>
								<option value="15:00">15:00</option>
								<option value="16:00">16:00</option>
								<option value="17:00">17:00</option>
								<option value="18:00">18:00</option>
								<option value="19:00">19:00</option>
								<option value="20:00">20:00</option>
								<option value="21:00">21:00</option>
								<option value="22:00">22:00</option>
							</select>
						</div><br>
						<button name="submit" type="submit" id="submit">ENVIAR</button>
					</form>
					<div class="alert"></div>
				</div>
				<div class="col-xs-12 col-sm-6" style="margin:0; padding:0;">
					<div id="map_canvas"></div>
				</div>
			</div>
		</div> 
	</div>
	<footer>
		<div class="container no-padding">
			<ul class="socials-icons">
				<li>
					<a href="https://www.facebook.com/divinouruguay" target="_blank">
						<?php
						$img_src = "images/btn_facebook_pie.png";		
						echo '<img src="'.$img_src.'" />';
						?>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/Divino_UY" target="_blank">
						<?php
						$img_src = "images/btn_twitter_pie.png";
						echo '<img src="'.$img_src.'" />';
						?>
					</a>
				</li>
				<li>
					<a href="http://tienda.mercadolibre.com.uy/divino" target="_blank">
						<?php
						$img_src = "images/btn_mercadolibre_pie.png";
						echo '<img src="'.$img_src.'" />';
						?>
					</a>
				</li>
			</ul> 

			<p class="copyright" style="text-align:center">
				Copyright &copy; DIVINO S.A. Derechos reservados. <br>
				Montevideo, Uruguay 
			</p>

		</div>
	</footer>
	<div class="container-fluid nextBtn nextB">
		<div class="col-xs-12">
			<a href="#" class="scroll-link" data-id="intro">
				<img src="images/nextdivino.png" />
			</a>
		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="js/iniapp.js" type="text/javascript"></script>

</body>
</html>

<?php 
	$fp = fopen($cachefile, 'w');    
	fwrite($fp, ob_get_contents());    
	fclose($fp);    
 
	ob_end_flush();	
?>