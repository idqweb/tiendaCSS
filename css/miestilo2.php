<?php    include("../config.css.inc.php") ?>


/*  LAS CARACTERISTICAS GENERALES DE LA WEB */

@import url(https://fonts.googleapis.com/css?family=Roboto:500);

*{
	font-family: '<?php echo $tipografia; ?>', cursive, Arial;
	font-size:100%;
}


#pagewrap {
    width: <?php echo $anchototalweb; ?>;
    margin:auto;
}

#tituloLogo {
	top: 1%;
	width: auto;
	text-align:center
}

#tituloLogo img {
		width:40%;
		
			
}
#tituloLogo h1 {
		        
		
}

#titulo {
        
        color: <?php echo $colorLineaSeparacion; ?>;
}



.menu2 {
	width:45%;
	float:left;

}


.licenciaIDQ{
		text-align: center;
		
}

hr {
	clear:both;
	color:  <?php echo $colorLineaSeparacion; ?>;
	
}

/************** Fin caracteristicas Generales Web ************/




#textoportada {
        padding:2%;


}


#subtituloportada {
        background: rgba(73,155,234,1);

}



#title-ofertas {
    
background: linear-gradient(to right, rgba(248,80,50,1) 0%, rgba(241,111,92,1) 4%, rgba(246,41,12,1) 51%, rgba(240,47,23,1) 71%, rgba(231,56,39,1) 100%);
color:#FFD700;

}



/*********** Caja de producto portada ****************/

.box-ofertas{ 
  	
    background-color: #ffffff;
    border-color: #dddddd;
    border-radius: 0;
    border-style: solid;
    border-width: 1px;
    box-shadow: 0 1px 4px 0 #99a3ad, 0 0 40px #eeeeee;
    
    

}

.box-ofertas .box-productoportada{
              
        text-align: center; // centra la imagen del producto
        
}




.box-productoportada{ 
    margin:auto auto 3% 3%;
    display:inline-block;
    height: auto; 
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

	
.capita{
	
    display: flex;
    text-align: center;
		
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
  margin-left: -85px;
  margin-top: 200px;
  padding: 8px 18px;
  position: absolute;
  text-decoration: none;
  font-size: 1rem;
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
/******************** Fin Boton de comprar ********************/


/******************** Producto Portada ***********************/
.portadaprecio{
        color:#007126;
        display:flex;
        padding-left:5%;
        font-size:39px;
        float:left;
}


.nombreproducto {
    display:block;
	color: <?php echo $colortituloproducto; ?>;
	margin-top:5px;
    
}





.vermas a{
     display: block;
    text-align: right;
    text-decoration: none;
}





/***************** RESPONSIVE************/

@media (min-width: 640px) { body {font-size:1rem;} }
@media (min-width:960px) { body {font-size:1.2rem;} }
@media (min-width:1100px) { body {font-size:1.5rem;} }

    h1 { font-size: 2em; }
    h2 { font-size: 1.5em; }
    h3 { font-size: 1.17em; }
    h4 { font-size: 1.12em; }
    h5 { font-size: .83em; }
    h6 { font-size: .75em; }


.destacado img{
	margin: 48px auto;
    position: absolute;
    width: 30%;
}



/***************** Panel Configuracion ************/


.centrado  {
		display: block;
		margin: auto;
		padding: 1%;
		text-align: center;
		width: 94%;

}


.centrado-boton{
		display: block;
		margin: auto;
		text-align: center;
		width: 94%;
}

#opt1{
	margin-rigth:250px;

}
#opt2{
	margin-left:250px;

}















