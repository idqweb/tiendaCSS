<?php
    header("Content-type: text/css; charset: UTF-8");

	    
    /***** Variables Generales - Aspecto - Colores -Tipografias ******/
    $tipografia = "Lobster";    // Tipografia general de la web
    $colortitulo = "#e69400";   // Color del id   #titulo
    $colorLineaSeparacion:"#6e583a"; // es el color del la etiqueta hr

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




