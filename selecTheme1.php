<?php
					 //	Si se escoje la 1 opcion (LA POR DEFECTO) escribo el fichero config.css.inc.php

						if (isset($_POST['opt1'])){
																
									echo "escribio";
									$f1=fopen("theme1.inc.php","w+");
									$linea="<?php";
									fwrite($f1,"$linea\r\n");
									$linea="header('Content-type: text/css; charset: UTF-8');";
									fwrite($f1,"$linea\r\n");
									$linea="/***** Variables Generales - Aspecto - Colores -Tipografias ******/";
									fwrite($f1,"$linea\r\n");
									$linea="\$tipografia = \"Lobster\";    // Tipografia general de la web";
									fwrite($f1,"$linea\r\n");
									$linea="\$colortitulo = \"#e69400\";   // Color del id   #titulo";
									fwrite($f1,"$linea\r\n");
									$linea="\$colorLineaSeparacion =\"#6e583a\"; // es el color del la etiqueta hr";
									fwrite($f1,"$linea\r\n");
									$linea="/***** Variables Tamaños - Anchos y Altos de las pantallas ******/";
									fwrite($f1,"$linea\r\n");
									$linea="\$anchototalweb=\"80%\";";
									fwrite($f1,"$linea\r\n");
									$linea="/***************** Variables Productos ******************/";
									fwrite($f1,"$linea\r\n");
									$linea="\$colortitulo = \"#e69400\"; //color titulo producto";
									fwrite($f1,"$linea\r\n");
									$linea="?>";
									fwrite($f1,"$linea\r\n");
							
									fclose($f1);
							
					}

		

?>