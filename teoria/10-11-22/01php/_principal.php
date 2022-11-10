<?php
	include 'BaseDatos.php';
	include 'pagina.php';
	include 'form.php';
	include 'tabla.php';

function request(){
	$sql="";		
	if (isset($_REQUEST['usuario']) ){
		#envia datos por post
		# var_dump($_REQUEST);
		# die();
		$usuario  = ($_REQUEST['usuario']);
		$pass     = ($_REQUEST['pass']);
		$sql      = ($_REQUEST['consulta']);					  
	}   
	#var_dump($_REQUEST);
	#die("</br>Evaluando request");
	return $sql;
}

function main(){
	#### R E Q U E S T                    ###########
	$sql   = request();
	
	#### C O N S U L T A   BD             ###########
	$dataTable = consultarBD($sql,NULL);	

	#### C A R G A R   C O N T E N I D O S  #########
	$contenido = cargarForm("frmConsulta");                  
	$contenido = $contenido . cargarTabla($dataTable, NULL);

	#### CARGAR CONTENIDOS EN PÁGINA WEB    #########
	$pagina = cargarPagina($contenido); 

	#### I M P R I M I R    P Á G I N A       #######   
	print($pagina);   # Muestra página
}	
main();

?>




