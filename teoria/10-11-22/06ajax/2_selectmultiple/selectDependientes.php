<?php


/*-------------------------------------------------------------------------------------------*/
function generarContenidoPadre($idSelect0,$tabla,$leyendaSeleccion){
	/*
	global $idSelect0;
	global $tabla;  //tabla pais(es la del primer select)
	global $leyendaSeleccion;
	*/
	/*CONSULTA a la base de datos*/
	include 'conexion.php';

	$sql="SELECT id, nombre FROM ".$tabla;
    $conn=conectarBD();                  # conectar a base de datos
    $datos=consultaSQL($conn, $sql ); # enviar la consulta a BD y recibir el resultado
	desconectarBD($conn);                # desconectar la base de datos

	$cf=count($datos);		 	   //cantidad de filas
	$cc=count($datos[0])/2; 	    //cantidad de columnas

	// Almacenar para retornar el primer select compuesto por los paises(el PADRE)
	$res="";
	$res.= "<select name='$idSelect0' id='$idSelect0' onChange='cargarSelect(this.id)'>";
	$res.= "<option value='0'> $leyendaSeleccion </option>";

	for ( $i = 0; $i<$cf;$i++){
		$res.= "<option value='".$datos[$i][0]."'>".$datos[$i][1]."</option>";
	}
	$res.= "</select>";

	return $res;
}
function main(){

	/*
	PHP PRINCIPAL (DE INCIO)
	-------------------------------------------------------------------------------------------*/
	/*VARIABLES GENERALES*/

	$tabla="pais"; //tabla de paises a consultar (es la del primer select PADRE)
	$leyendaSeleccion="Seleccione Uno";
	$leyendaNoDisponibleSeleccion="Selecciona opci&oacute;n...";

	$labelSelect0="Pais";//label de el select padre
	$labelSelect1="Provincia";//label del select hijo
	$labelSelect2="departamento";//label de el select hijo

	$idSelect0="pais";//idselect1 y name del select1
	$idSelect1="provincia";//idselect2 y name del select2
	$idSelect2="departamento";//idselect3 y name del select3

	$contenidoPadre=generarContenidoPadre($idSelect0,$tabla,$leyendaSeleccion);

	$pagina=<<<PAGINA

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

	<html lang="es">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>AJAX, Combos (select) dependientes</title>
	<link rel="stylesheet" type="text/css" href="estilos.v2.css">
	<script type="text/javascript" src="ajax.js"></script>
	<script type="text/javascript" src="selectDependientes.js"></script>
	</head>
	
	<body>
	
				<div class="abm-form" >
					
					<p>
						<label class="left">{$labelSelect0}</label>
						{$contenidoPadre}
					</p>
					
					<p>
						<label class="left">{$labelSelect1}</label>
						<span>
							<select disabled="disabled" onChange='cargarSelect(this.id)' name='{$idSelect1}' id='{$idSelect1}'>
								<option value="0">{$leyendaNoDisponibleSeleccion}</option>
							</select>
						</span>
					</p>
					
					<p>
						<label class="left">{$labelSelect2}</label>
						<span>
							<select disabled="disabled" onChange='cargarSelect(this.id)' name'{$idSelect2}' id='{$idSelect2}'>
								<option value="0">{$leyendaNoDisponibleSeleccion}</option>
							</select>
						</span>
					</p>
					
	
		
				</div>
				
	</body>
	</html>

PAGINA;
	echo $pagina;

}
main();
?>
