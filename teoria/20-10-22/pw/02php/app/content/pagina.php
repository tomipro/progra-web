<?php
/*
http://php.net/manual/es/language.types.string.php
http://php.net/manual/es/language.operators.string.php
http://php.net/manual/es/functions.variable-functions.php

*/

function cargarPagina($contenidoDoc) {

	$tituloDoc="Titulo de la página";
	$cabeceraDoc='cabeceraDoc';       # para llamar a la función cabeceraDoc dentro del heredoc
	$tabla='tabla';

	$html = <<<PAGINA
		<!DOCTYPE HTML5 >
		<html>
			<head>
				{$cabeceraDoc($tituloDoc)}
			</head>	
			<body>				
				{$contenidoDoc}					
			</body>
		</html>
PAGINA;
return ($html);
}

function cabeceraDoc($titulo){
$cabeceraPlantilla = <<<CABECERA
	
	    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
	    <title>{$titulo}</title>
	
		<link type="text/css" href="../css/general.css" rel="stylesheet"></link>
		<link type="text/css" href="../css/layout.css" rel="stylesheet"></link>
        <link type="text/css" href="../css/form.css" rel="stylesheet"></link>
		<link type="text/css" href="../css/boton.css" rel="stylesheet"></link>
        <link type="text/css" href="../css/tabla.css" rel="stylesheet"></link>

CABECERA;
return $cabeceraPlantilla;
}

?>
