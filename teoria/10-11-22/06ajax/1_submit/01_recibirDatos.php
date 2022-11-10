<?php
require_once('upload.php');

function recibirDatos(){
	//Recibe los datos por 'post' o por 'get'
	$nombre="";
	$apellido="";
	$edad="";
	$pasatiempo="";
	$usuario="";
	$pass="";
	$gastos="";
	$continente="";
	$materias="";
	$nombreArchivo="";
	$mensajeArchivo="";
	$estadoSubida="";
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

	
	// * * * * A R C H I V O * * * * * *
	// 'fileToUpload' es el name del input html tipo file (cuando se envía por fecth)
	// 'fileToUpload' es el name del input html tipo submit 'del boton' (cuando se envía por form)
	if(isset($_REQUEST['fileToUpload']) || isset($_FILES['fileToUpload'])){
		if (isset($_FILES['fileToUpload'])){
			$res = recibirArchivo();
			if ($res!=null ){
				if ($res['uploadOk']){// SI SE LOGRÓ SUBIR CON EXITO
					$estadoSubida="Correcta";
				}else{
					$estadoSubida="Incorrecta";
				}
				$nombreArchivo=$res['filename'];
				$mensajeArchivo=$res['message'];
			}	
		}
	}		
	// * * * * * * * * * * * * * * * * * 

	$txt=<<<TXT
	<h2>Datos recibidos</h2>
	<label>Nombre: </label ><b style='color:red'>
		{$nombre}
		</b></br>
	<label>Apellido: </label><b style='color:red'>
		{$apellido}
		</b></br>
	<label>Edad: </label><b style='color:red'>
		{$edad}
	</b></br>
	<label>Pasatiempo: </label><b style='color:red'>
		{$pasatiempo}
	</b></br>
	<label>Usuario: </label><b style='color:red'>
		{$usuario}
	</b></br>
	<label>Contraseña: </label><b style='color:red'>
		{$pass}
	</b></br>
	<label>Continente: </label><b style='color:red'>
		{$continente}
	</b></br>
	<label>Gastos: </label><b style='color:red'>
		{$gastos}
	</b></br>
	<label>Materias: </label><b style='color:red'>
		{$materias}
	</b></br>
	<label>ARCHIVO ESTADO SUBIDA: </label><b style='color:red'>
		{$estadoSubida}
	</b></br>
	<label>ARCHIVO NOMBRE: </label><b style='color:red'>
		{$nombreArchivo}
	</b></br>
	<label>ARCHIVO MENSAJE: </label><b style='color:red'>
		{$mensajeArchivo}
	</b></br>
	<hr> 
TXT;
return $txt;

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
