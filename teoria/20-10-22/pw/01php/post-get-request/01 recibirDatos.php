
<?php
function recibirDatos(){
	$nombre="";
	$apellido="";
	$edad="";
	$pasatiempo="";
	$usuario="";
	$pass="";
	$gastos="";
	$continente="";
	$materias="";
	if (isset($_REQUEST['nombre'])){
		$nombre=$_REQUEST['nombre'];
	}
	if (isset($_REQUEST['apellido'])){
		$apellido=$_REQUEST['apellido'];
	}
	if (isset($_REQUEST['edad'])){
		$edad=$_REQUEST['edad'];
	}	
	if (isset($_REQUEST['pasatiempo'])){
		$pasatiempo=implode($_REQUEST['pasatiempo'],",");
		//implode convierte el array a string
		//pasatiempo es un check multiple
	}
	if (isset($_REQUEST['usuario'])){
		$usuario=$_REQUEST['usuario'];
	}
	if (isset($_REQUEST['pass'])){
		$pass=$_REQUEST['pass'];
	}
	if (isset($_REQUEST['gastos'])){
		$gastos=implode($_REQUEST['gastos'],",");
		//implode convierte el array a string
		//gastos es un selection multiple
	}
	if (isset($_REQUEST['continente'])){
		$continente=$_REQUEST['continente'];
	}
	if (isset($_REQUEST['materias'])){
		$materias=implode($_REQUEST['materias'],",");
		//implode convierte el array a string
		//materias es un selection multiple
	}
	

	$txt=<<<TXT
	<h2>Datos recibidos</h2>
	<label>Nombre: </label ><b style={color:red;}>
		{$nombre}
		</b></br>
	<label>Apellido: </label><b style={color:red;}>
		{$apellido}
		</b></br>
	<label>Edad: </label><b style={color:red;}>
		{$edad}
	</b></br>
	<label>Pasatiempo: </label><b style={color:red;}>
		{$pasatiempo}
	</b></br>
	<label>Usuario: </label><b style={color:red;}>
		{$usuario}
	</b></br>
	<label>Contraseña: </label><b style={color:red;}>
		{$pass}
	</b></br>
	<label>Continente: </label><b style={color:red;}>
		{$continente}
	</b></br>
	<label>Gastos: </label><b style={color:red;}>
		{$gastos}
	</b></br>
	<label>Materias: </label><b style={color:red;}>
		{$materias}
	</b></br>
	<hr> 
TXT;
return $txt;
//$get_numero = count($_GET);
//$get_etiquetas = array_keys($_GET);// obtiene los nombres de las varibles
//$get_valores = array_values($_GET);// obtiene los valores de las varibles

}

function main(){
	echo recibirDatos();
}
main();

/*	
	PHP, a traves de un conjunto de variables globales, es capaz
	de recuperar el conjunto de datos de un formulario que han 
	sido enviados desde el navegador para, despues, poder trabajar 
	con ellos. Las tres variables principales para realizar esta 
	operacion son:

	_POST: Array que contiene las variables pasadas a traves del 
	       metodo POST. En versiones anteriores a la 4.2.0, se 
		   llamaba HTTP_POST_VARS.
	_GET: Array que contiene las variables pasadas a traves del 
	      metodo GET. En versiones anteriores a la 4.2.0. se 
		  llamaba HTTP_GET_VARS.
	_REQUEST: Array que contiene las variables pasadas a traves 
	          de cualquier mecanismo de entrada.
*/
?>
