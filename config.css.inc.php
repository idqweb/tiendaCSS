<?php
    header("Content-type: text/css; charset: UTF-8");

	include("variables.inc.php"); 
  
    /***** Variables Generales - Aspecto - Colores -Tipografias ******/
    $tipografia = $configuracion[1];    // Tipografia general de la web
    $colortitulo = $configuracion[2];   // Color del id   #titulo
    $colorLineaSeparacion = $configuracion[6]; // es el color del la etiqueta hr

    /***** Variables Tamaños - Anchos y Altos de las pantallas ******/
    $anchototalweb=$configuracion[4];

	/***************** Variables Productos ******************/
	$colortituloproducto = $configuracion[5]; //color titulo producto

  
?>