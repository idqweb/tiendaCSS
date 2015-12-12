<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Catalogo - Tienda Deportes</title>
				
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
							
			</header>
				
				<!------------ Menu ----------->
				<div id='cssmenu'>
					<ul>
					   <li	class='active'><a href='index.php'>Inicio</a></li>
					   <li ><a href='catalogo.php'>Catalogo</a>
					   <li><a href='configuracion.php'>Configuracion</a></li>
					</ul>
				</div>
			<!------------ Menu ------------>
				
				
				
			
			<section>	
		
					<hr/>

					<div class="capita">
						<div class="box-ofertas">

								<h3 id="title-ofertas">Novedades en Camisetas de Equipos de Futbol</h3>


								<div class="box-productoportada">
									<span class="nombreproducto">Camiseta Chealse</span>
									<img src="./images/chealsea-camiseta.jpg" alt="Camiseta Chealsea" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>


								<div class="box-productoportada">
									<span class="nombreproducto">Camiseta Bilbao</span>
									<img src="./images/camisetabilbao.jpg" alt="Camiseta bilbao" />
									<span class="portadaprecio">99 €</span>	
											<a href="#" id="btn">Comprar</a>
							</div>


								<div class="box-productoportada">
									<span class="nombreproducto">Camiseta España</span>
									<img src="./images/camisetaspain.jpg" alt="Camiseta España" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>

								<div class="box-productoportada">
									<span class="destacado"><img src="./images/producto_destacado.png" alt="producto destacado" /></span>
									<span class="nombreproducto">Camiseta Ponferradina</span>
									<img src="./images/camisetaponferradina.jpg" alt="Camiseta Ponferradina" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
							</div>

								<div class="box-productoportada">
									<span class="nombreproducto">Camiseta Atletico</span>
									<img src="./images/camisetaatletico.jpg" alt="Camiseta Atletico" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>	

								<div class="vermas"><a href="#">Ver más ...</a></div>
						</div>
						
						
						<div class="box-ofertas">

								<h3 id="title-ofertas">Novedades Zapatillas Runnig</h3>


								<div class="box-productoportada">
									<span class="destacado"><img src="./images/producto_destacado.png" alt="producto destacado" /></span>
									<span class="nombreproducto">Zapatilla Assics</span>
									<img src="./images/zapatilla-assics.jpg" alt="Zapatilla Assics" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>


								<div class="box-productoportada">
									<span class="nombreproducto">Zapatilla Adidas</span>
									<img src="./images/zapatilla-adidas.jpg" alt="Zapatilla Adidas" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
							</div>


								<div class="box-productoportada">
									<span class="nombreproducto">Zapatilla Kalenji</span>
									<img src="./images/zapatillakalenji.jpg" alt="Zapatilla Kalenji" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>

								<div class="box-productoportada">
									<span class="nombreproducto">Zapatilla Nike</span>
									<img src="./images/zapatilla-nike.jpg" alt="Zapatilla Nike" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>

								<div class="box-productoportada">
									<span class="nombreproducto">Zapatilla Assics 2</span>
									<img src="./images/zapatilla-assics2.jpg" alt="Zapatilla Assics 2" />
									<span class="portadaprecio">69 €</span>	
											<a href="#" id="btn">Comprar</a>
								</div>	

								<div class="vermas"><a href="#">Ver más ...</a></div>
						</div>
						


					</div>			


    
			</section>
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