<?php
/*
PHP QUE RECIBE PETICIONES GET Y RESPONDE ARMANDO UN INPUT (EN HTML)

------------------------------------------------------------------------------------------------*/

/*------------------------------------------------------------------------------------------------*/
function validaSelect($selectDestino,$listadoSelects){
	// Se valida que el select enviado via GET exista
	if(isset($listadoSelects[$selectDestino])) return true;
	else return false;
}

function validaOpcion($opcionSeleccionada){
	// Se valida que la opcion seleccionada por el usuario en el select tenga un valor numerico
	if(is_numeric($opcionSeleccionada)) return true;
	else return false;
}

function main(){

	/*VARIABLES GENERALES*/
	$selectPadre="pais"; //ID del select padre, el que todos dependen de �l.
	// Array que vincula los IDs de los selects declarados en el HTML con LA CONSULTA
	//donde se encuentra su contenido
	$consultas=array(
		"paises"=>"NO TIENE CONSULTA PORQUE NO TIENE DEPENDENCIA, ES EL PADRE",
		"provincia"=>"SELECT id, nombre FROM  provincia WHERE idpais=",
		"departamento"=>"SELECT id, nombre FROM departamento WHERE idprovincia="
	);
	// Array que vincula los IDs de los selects declarados en el HTML con el NOMBRE de la tabla 
	//donde se encuentra su contenido
	$listadoSelects=array(
		"pais"=>"pais",
		"provincia"=>"provincia",
		"departamento"=>"departamento"
	);
	$selectDestino=$_GET["select"]; $opcionSeleccionada=$_GET["opcion"];
	if(validaSelect($selectDestino,$listadoSelects) && validaOpcion($opcionSeleccionada)){
		//me conecto a la base de datos y realizo la consulta con los datos pasados por GET			
		if ($listadoSelects[$selectDestino] != $selectPadre){ 
		//CONSULTA A BASE DE DATOS
			include 'conexion.php';
			$sql=$consultas[$selectDestino].$opcionSeleccionada;
			$conn=conectarBD();               # conectar a base de datos
			$datos=consultaSQL($conn, $sql ); # enviar la consulta a BD y recibir el resultado
			desconectarBD($conn);             # desconectar la base de datos
		}		
		$cf=count($datos);		 	//cantidad de filas
		$cc=count($datos[0])/2; 	//cantidad de columnas
		// Comienzo a almacenar el select para imprimir al final
		$res="";
		$res.= "<select name='".$selectDestino."' id='".$selectDestino."' onChange='cargarSelect(this.id)'>";
		$res.= "<option value='0'>Seleccione Uno</option>";
		for ( $i = 0; $i<$cf;$i++){
			$res.= "<option value='".$datos[$i][0]."'>".$datos[$i][1]."</option>";
		}
		$res.= "</select>";
		echo $res;
			// Convierto los caracteres conflictivos a sus entidades HTML correspondientes para su 
			// correcta visualizacion
			// $datos[1]=htmlentities($datos[1]);	
				
	}
}
main();

?>