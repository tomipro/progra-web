<?php
function main(){
	$var1="hola mundo";
	$var2="<p>hola mundo</p>";
	$titulo="<h1>EJEMPLO CON AJAX</h1>";
	$nombre = "Mariano ...";



	$texto = <<<TEXTO
	<p>Es un ejemplo de uso de AJAX realizados por "$nombre"  , para comprender su funcionamiento......</p>
TEXTO;

	echo ($titulo .$texto);
}
main();


?>