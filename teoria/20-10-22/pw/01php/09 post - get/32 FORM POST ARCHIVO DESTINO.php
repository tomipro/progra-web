

<label>Nombre: </label ><b style={color:red;}>
	<?php echo $_POST['nombre'];?></b></br>
<label>Apellido: </label><b style={color:red;}>
	<?php echo $_POST['apellido'];?></b></br>
<label>Edad: </label><b style={color:red;}>
	<?php echo $_POST['edad'];?></b></br>
<hr> 
<p>
	Este es el archivo destino donde se captura las variables
	</br>
	enviadas desde el cliente hacia el servidor a trav�s de 
	</br>
	metodo POST. 
	</br>
	Notese que los nombre de las variables POST y de los imput 
	</br>
	del archivo origen son iguales, sino no se pueden leer.
	</br></br>
	
	PHP, a trav�s de un conjunto de variables globales, es capaz de recuperar el conjunto de datos de un formulario que han sido enviados desde el navegador para, despu�s, poder trabajar con ellos. Las tres variables principales para realizar esta operaci�n son:
	_POST: Array que contiene las variables pasadas a trav�s del m�todo POST. En versiones anteriores a la 4.2.0, se llamaba HTTP_POST_VARS.
	_GET: Array que contiene las variables pasadas a trav�s del m�todo GET. En versiones anteriores a la 4.2.0. se llamaba HTTP_GET_VARS.
	_REQUEST: Array que contiene las variables pasadas a trav�s de cualquier mecanismo de entrada.
</p>
