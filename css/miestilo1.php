<?php
    header("Content-type: text/css; charset: UTF-8");

	    
    /***** Variables Generales - Aspecto - Colores -Tipografias ******/
    $tipografia = "Lobster";    // Tipografia general de la web
    $colortitulo = "#e69400";   // Color del id   #titulo
    $colorLineaSeparacion ="#6e583a"; // es el color del la etiqueta hr

    /***** Variables Tamaños - Anchos y Altos de las pantallas ******/  
    $anchototalweb="80%";

	
  
?>


@import url(https://fonts.googleapis.com/css?family=Lobster);


/*  LAS CARACTERISTICAS GENERALES DE LA WEB */
*{
	font-family: '<?php echo $tipografia; ?>', cursive, Arial;
	
}


#pagewrap {
    width: 80%;
    margin:auto;
}

#tituloLogo {
	top: 1%;
	height: 104px;
	width: auto;
	
}

#tituloLogo img {
		float:left;
		margin: 0 0 0 2%;
			
}
#tituloLogo h1 {
		float:left;
		margin-left: 25%; 
        
		
}

#titulo {
        
        color: <?php echo $colortitulo; ?>;
}



#cssmenu {
		clear:both;
		
}

.licenciaIDQ{
		text-align: center;
		
}

hr {
	clear:both;
	color:  <?php echo $colorLineaSeparacion; ?>;
	
}




/*********** Caja de producto portada ****************/



.box-ofertas{ 
    margin:auto;
    height: 350px; 
    width: 99%;
    position: relative;
    #display:inline-block; asi se ajustaria al contenido
    #margin-left:auto;
    #margin-right:auto;
   
    background-color: #FFFFFF; 
    border-width: 1px; 
    border-style: solid; 
    border-color: #DDDDDD; 
    border-radius: 0px; 
    box-shadow: 0px 1px 4px 0px #99a3ad, 0px 0px 40px #eeeeee; 
}





.box-ofertas .box-productoportada{
              
        text-align: center; // centra la imagen del producto
        
}




.box-productoportada{ 
    margin-top: 3%;
    margin-left:5%;
    float:left;
    height: 275px; 
    width: 200px; 
    position: relative;
    background-color: #FFFFFF; 
    border-width: 1px; 
    border-style: solid; 
    border-color: #DDDDDD; 
    border-radius: 0px; 
    box-shadow: 0px 10px 6px -6px #777777;
    
}

.box-productoportada img{
                
                padding-top:6%;
                width:90%;
                height:auto;
                

}

/******************** Boton de comprar ********************/

#btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  color: #ffffff;
  display: initial;
  margin-bottom: 3px;
  margin-left: -37px;
  margin-top: 14px;
  padding: 8px 18px;
  position: absolute;
  text-decoration: none;
}

#btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

.portadaprecio{
        color:red;
        display:flex;
        padding-left:5%;
        font-size:39px;
        float:left;
}


.nombreproducto {
    display:block;
    
}

























