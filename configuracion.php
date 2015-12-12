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
								
			<!------------ MENU  ----------->
				<div id='cssmenu'>
					<ul>
					   <li	class='active'><a href='index.php'>Inicio</a></li>
					   <li ><a href='catalogo.php'>Catalogo</a>
					   <li><a href='configuracion.php'>Configuracion</a></li>
					</ul>
				</div>
			<!------------ FINAL MENU ------------>
						
			</header>
			
				<p> Selecciona uno de los dos PLANTILLAS disponibles actualmente" </p>
				
				<form name="opcionesCompletas" id="opcionesCompletas" method="post" action="configuracion.php">
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
				
				
				<?php
					
						//Escribe en el fichero variables.inc.php las caracteristicas completas de la PLANTILLA seleccionada



						// Plantilla 1
						if (isset($_POST['optcion']) && $_POST['optcion'] == "opt1"){
						
							$ancho = $_POST['ancho'];
							$f1=fopen("./variables.inc.php","w+");
							$linea="<?php";
							fwrite($f1,"$linea\r\n");
							$linea="// Los valores del array corresponden  \$configuracion= array (\"Estructura Web\",\"TipoLetra\", \"Color Titulo\",\"Logo\",\"Ancho Web\",\"Color Titulo Producto\",\"Color Adorno HR\",\"Color Barra Menu\",\"Menu Letra\",\"Menu Letra Sobre Link\");";
							fwrite($f1,"$linea\r\n");
							$linea="\$configuracion= array (\"estilo1.php\",\"Lobster\", \"#e69400\",\"logo.png\",\"80%\",\"#e69400\",\"#6e583a\",\"#e69400\",\"#000000\",\"#ffffff\");";
							fwrite($f1,"$linea\r\n");
							$linea='?>';
							fwrite($f1,"$linea\r\n");
							fclose($f1);
						header("Location:configuracion.php");
					}

						// Plantilla 2
						if (isset($_POST['optcion']) && $_POST['optcion'] == "opt2"){
						
							$ancho = $_POST['ancho'];
							$f1=fopen("./variables.inc.php","w+");
							$linea="<?php";
							fwrite($f1,"$linea\r\n");
							$linea="// Los valores del array corresponden  \$configuracion= array (\"Estructura Web\",\"TipoLetra\", \"Color Titulo\",\"Logo\",\"Ancho Web\",\"Color Titulo Producto\",\"Color Adorno HR\",\"Color Barra Menu\",\"Menu Letra\",\"Menu Letra Sobre Link\");";
							fwrite($f1,"$linea\r\n");
							$linea="\$configuracion= array (\"estilo2.php\",\"Roboto\",\"#007126\",\"logo2.png\",\"70%\",\"#007126\",\"#007126\",\"#007126\",\"#000000\",\"#ffffff\"); ";
							fwrite($f1,"$linea\r\n");
							$linea='?>';
							fwrite($f1,"$linea\r\n");
							fclose($f1);
						header("Location:configuracion.php");
					}

				?>
				
				
				
				<hr class="lineapanelconfiguracion"/>
				
				<p>Si lo deseas puedes cambiar algunos valores que trae por "defecto" la "PLANTILLA" que has seleccionado:<p>
				
				
				
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Tipografía (Ej: Arial)"</label>
					<input type="text" name="letra" id="letra" value="Arial" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color Titulo General WEB (Ejem:#000fff))</label>
					<input type="text" name="colortituloweb" id="colortituloweb" value="#000fff" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Subelo previamente a la carpeta "images" (Ejem:logoejemplo.png)</label>
					<input type="text" name="logotipo" id="logotipo" value="logoejemplo.png" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Ancho de Toda la web en % (Ejem:80%)</label>
					<input type="text" name="ancho" id="ancho" value="80%" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color del Titulo de los Productos (Ejem:#fd0b0b)</label>
					<input type="text" name="colortituloproducto" id="colortituloproducto" value="#fd0b0b" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color lineas de separacion HR (Ejem: #f94f0e)</label>
					<input type="text" name="colorlinea" id="colorlinea" value="#f94f0e" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color de la Barra del MENU (Ejem:#ea1e88)</label>
					<input type="text" name="colorbarramenu" id="colorbarramenu" value="#ea1e88" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color Letra MENU (Ejem:#2943e1)</label>
					<input type="text" name="colorletramenu" id="colorletramenu" value="#2943e1" />
					<input type="submit" value="Cambiar"/>
				</form>
				<br/>
				<form name="prueba" id="prueba" method="post" action="configuracion.php">
					<label>Color letra MENU ACTIVO  (Ejem:#48e129)</label>
					<input type="text" name="colorhovermenu" id="colorhovermenu" value="#48e129" />
					<input type="submit" value="Cambiar"/>
				</form>
				
				
				<?php
					
						// Añade al archivo variables.inc.php la opcion enviada por el usuario 
					
						if (isset($_POST['letra']) && $_POST['letra'] != ""){
							
							$letra = $_POST['letra'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[1]=\"$letra\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['colortituloweb']) && $_POST['colortituloweb'] != ""){
							
							$colortituloweb = $_POST['colortituloweb'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[2]=\"$colortituloweb\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['logotipo']) && $_POST['logotipo'] != ""){
							
							$logotipo = $_POST['logotipo'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[3]=\"$logotipo\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							header("Location:index.php");
						
						}


						if (isset($_POST['ancho']) && $_POST['ancho'] != ""){
							
							$ancho = $_POST['ancho'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[4]=\"$ancho\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						
						if (isset($_POST['colortituloproducto']) && $_POST['colortituloproducto'] != ""){
							
							$colortituloproducto = $_POST['colortituloproducto'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[5]=\"$colortituloproducto\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['colorlinea']) && $_POST['colorlinea'] != ""){
							
							$colorlinea = $_POST['colorlinea'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[6]=\"$colorlinea\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['colorbarramenu']) && $_POST['colorbarramenu'] != ""){
							
							$colorbarramenu = $_POST['colorbarramenu'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[7]=\"$colorbarramenu\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['colorletramenu']) && $_POST['colorletramenu'] != ""){
							
							$colorletramenu = $_POST['colorletramenu'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[8]=\"$colorletramenu\" ?>";
							fwrite($f1,"$linea\r\n");
							fclose($f1);
							
						
						}
						if (isset($_POST['colorhovermenu']) && $_POST['colorhovermenu'] != ""){
							
							$colorhovermenu = $_POST['colorhovermenu'];
							$f1=fopen("./variables.inc.php","a+");
							$linea="<?php \$configuracion[9]=\"$colorhovermenu\" ?>";
							fwrite($f1,"$linea\r\n");
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