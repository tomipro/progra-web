<?php
require_once 'config.php';

function cargarTabla($dataTable, $conf){	
	$res="";
	if (!isset($conf)){ #Configuracion de salida de la tabla
					    # si está en Null, ENTONCES SE FUERZA UNA CONFIRACIÓN POR DEFECTO.
		$conf=configTabla();
	}

	if ( isset($dataTable) && sizeof($dataTable)>0 ){
		$res= tabla($dataTable, $conf); 
	}	
	return $res;
}

function tabla($tabla, $conf){

	$titulos = $tabla[0];
	$datos   = $tabla[1];

	$cf=count($datos);		 	    # cantidad de filas
	$cc=count($datos[0])/2; 	    # cantidad de columnas

	$filasTabla = 'filasTabla';     # para llamar a la función filasTabla dentro del heredoc
	$filaTitulo = 'filaTitulo';		# para llamar a la función filaTitulo dentro del heredoc
	$filaPie    = 'filaPie';	    # para llamar a la función filaPie dentro del heredoc


	$tablaPlantilla = <<<TABLA
			<table class="tablaListado" >
				<thead>
					{$filaTitulo($cc,$titulos,$conf)}
				</thead>
				<tfoot>
					{$filaPie($cc)}
				</tfoot>
				<tbody >
					{$filasTabla($cf, $cc, $datos,$titulos,$conf)}
				</tbody>      
			</table>				
TABLA;
	return $tablaPlantilla;
}

function filaTitulo($cc,$titulos,$conf){

	$celdaTitulo='celdaTitulo';
	$filaTituloPlantilla = <<<FILATITULO
					<tr>
						{$celdaTitulo($cc,$titulos,$conf)}
					</tr>			
FILATITULO;
	return $filaTituloPlantilla ;
}

function celdaTitulo($cc,$titulos,$conf){
	$celdas="";

	for ($c=0;$c<$cc;$c++)	{
		if (!in_array($titulos[$c],$conf["noCargaFila"]))		
			$celdas = $celdas . cargarUnaCeldaTitulo($c,$titulos);
	}
	return $celdas ;
}

function cargarUnaCeldaTitulo($c,$titulos){
	$content="Titulo ".$c;
	if (isset($titulos[$c])){
		$content=$titulos[$c];
	}
	$celda = <<<CELDA
	<th>{$content}</th>		
CELDA;
	return $celda;
}

function filaPie($cc){
	$celdaPie='celdaPie';
	$filaPiePlantilla = <<<FILAPIE
				<tr >
					{$celdaPie($cc)}
				</tr>			
FILAPIE;
	return $filaPiePlantilla ;
}

function celdaPie($cc){
	$celdas="";
	for ($c=0;$c<$cc;$c++){		
		$celdas = $celdas . cargarUnaCeldaPie($c);
	}
	return $celdas ;
}

function cargarUnaCeldaPie($c){
	$celda = <<<CELDAPIE
			<th>&nbsp;</th>		
CELDAPIE;
	return $celda;
}

function filasTabla($cf,$cc,$datos,$titulos,$conf) {
	$filas="";
	
	for ($f=0;$f<$cf;$f++){		
		$filas = $filas .cargarUnaFila($f,$cc,$datos,$titulos,$conf);
	}
	return $filas;
}

function cargarUnaFila($f,$cc, $datos,$titulos,$conf){
	$fila="";
	if($f%2==0)	{			
		$paridad="par";
	}
	else{
		$paridad="impar";
	}

	$celdas="";
	for ($c=0;$c<$cc;$c++){	
		if (!in_array($titulos[$c],$conf["noCargaFila"]))
			$celdas = $celdas . cargarUnaCelda($f,$c, $datos);
	}

	$botonera=cargarCeldaBoton($conf);
     
	if (!isset($datos[$f][$conf['campoClave']])){       // por si cambio el nombre del campo id. Por defecto id es la key
		$myID="error";
		$campoClave="error";
	}
	else{
		$myID=$datos[$f][$conf['campoClave']];
		$campoClave=$conf['campoClave'];
	}
	
	$filaPlantilla = <<<FILA
					<tr id={$myID} name={$campoClave}  class= {$paridad}>
						{$celdas}
						{$botonera}
					</tr>
FILA;

	return $filaPlantilla;
}

function cargarUnaCelda($f,$c,$datos){
	$celdaPlantilla = <<< CELDA
		<td contenteditable="true">{$datos[$f][$c]}</td>
CELDA;
	return $celdaPlantilla;
}

function cargarCeldaBoton($conf){
	$celdaBotonPlantilla = "";
	if ($conf['hayBotonerABM']){

		$celdaBotonPlantilla = <<<CELDABOTON
		<td class="iconCenter">					
			<a href="#"><img src="../img/ver_25.png" title="Buscar" class="punteroMano"></a> 
			&nbsp; 
			<a href="#"><img src="../img/editar_25.png" title="Editar" class="punteroMano"></a> 
			&nbsp;                                          
			<a href="#"><img src="../img/basura_25.png" title="Eliminar" class="punteroMano"></a>				
		</td>
CELDABOTON;
	}
	return $celdaBotonPlantilla;
}


/*
$cadenaABuscar		= "#FILAS_TABLA#";
$cadenaDeReemplazo	= filasTabla();
$tablaPlantilla		= str_replace($cadenaABuscar,$cadenaDeReemplazo,$tablaPlantilla); 
*/


?>




