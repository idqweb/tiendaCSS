<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Panel - Configuración</title>
		
		
		<?php include("variables.inc.php") ?>
		
		
		<!-- Etiqueta necesaria para ser Responsive HTML5 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
		
		<!-- Los estilos css del MENU de la página -->
			<link rel="stylesheet" href="./css/estilomenu.php" />
		
		<!-- Los estilos css de la página -->
			<link rel="stylesheet" href="./css/<?php echo $configuracion[0]; ?>"/>
		
			
		<!----  JAVASCRIPT del MENU ------------>
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   			<script src="./js/script.js"></script>
		<!-- END JAVASCRIPT del MENU -->
			
		
	</head>
	<body>
			<div id="pagewrap">
				<header>
				<div id="tituloLogo">
					<img src="./images/<?php echo $configuracion[3]; ?>" />
					<h1 id="titulo"> Tienda de venta de productos deportivos </h1>
				</div>
								
				<!------------ Menu ----------->
				<div id='cssmenu'>
					<ul>
					   <li	class='active'><a href='index.php'>Inicio</a></li>
					   <li ><a href='catalogo.php'>Catalogo</a>
					   <li><a href='configuracion.php'>Configuracion</a></li>
					</ul>
				</div>
			<!------------ Menu ------------>
						
			</header>
			
				<p> Selecciona uno de los dos posibles Themes" </p>
				
				<form name="opcionesCompletas" id="opcionesCompletas" method="post" action="selecTheme1.php">
					<div class="centrado">
						<img src="./images/tiendaOp1.png"/>
						<img src="./images/tiendaOp2.png"/>
					</div>
					<div class="centrado-boton">
						<input type="radio" id="opt1" name="optcion" value="opt1" checked="checked"/>
						<input type="radio" id="opt2" name="optcion" value="opt2"  />
					</div>
						
					<input class="centrado-boton" type="submit" value="Selecciona"/>
					
				</form>
				
				
				
				
				
				
				
				
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					ancho<input type="text" name="ancho" id="ancho" />
					<input type="submit" value="Enviar"/>
					
				</form>
				
				
				
				<?php
					



						if (isset($_POST['ancho']) && $_POST['ancho'] != ""){
							
							$ancho = $_POST['ancho'];
							$f1=fopen("./css/configura.ok","w+");
							$linea="header('Content-type: text/css; charset: UTF-8');";
							fwrite($f1,"$linea\r\n");
							$linea1="\$anchototalweb=\"$ancho\";";
							fwrite($f1,"$linea1\r\n");
							fclose($f1);
						
					}
				
				?>
				
			<footer>
					<hr/>
					
				<!------------------------------------------ Licencia de la tienda Online --------------------------------->	
					<div class="licenciaIDQ">
							<a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
							</a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Tienda Online</span> por <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.idqweb.com" property="cc:attributionName" rel="cc:attributionURL" target="_blank">
							IDQ</a> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>
					</div>
				<!------------------------------------------ Final Licencia la tienda Online --------------------------------->
			</footer>
		</div>
	</body>
</html>