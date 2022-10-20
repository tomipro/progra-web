<HTML>
<HEAD>
	<TITLE>Form GET</TITLE>
</HEAD>
<body>
<?php echo $HOME;?>
	<label>Nombre: </label><b style={color:red;}>
		<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : 'falso';?></b></br>
	<label>Apellido: </label><b style={color:red;}>
		<?php echo $_GET['apellido'];?></b></br>
	<label>Edad: </label><b style={color:red;}>
		<?php echo $_GET['edad'];?></b></br>
	<hr>

	<label>Apellido: </label><b style={color:red;}>
		<?php echo $_GET['nombre'];?></b></br>
	<label>Edad: </label><b style={color:red;}>
		<?php echo $_GET['secreto'];?></b></br>
	<hr>

	<?php 
		$get_numero = count($_GET);
		$get_etiquetas = array_keys($_GET);// obtiene los nombres de las varibles
		$get_valores = array_values($_GET);// obtiene los valores de las varibles
	?>
	<p>Cantidad de elementos del vector= <?php echo $get_numero; ?> </p>
	<p>var_dump(array_keys($_GET)) , obtiene los NOMBRES de las variables: <?php echo var_dump(array_keys($_GET)); ?> </p>
	<p>var_dump(array_values($_GET)), obtiene los VALORES de las varibles: <?php echo var_dump(array_values($_GET));?> </p>
	<p>var_dump($_GET) :<?php echo var_dump($_GET);?> </p>
	
	<hr>


	<p>
		Este es el archivo destino donde se captura las variables </br>
		enviadas desde el cliente hacia el servidor a través de </br>
		metodo GET. 
		</br>
		Notese que los nombre de las variables GET y de los imput 
		</br>
		del archivo origen son iguales, sino no se pueden leer.
		</br></br>
		La diferencia con el metodo POST es que con GET se ven
		los parametros en la barra del navegador
		</br></br>
		
		PHP, a través de un conjunto de variables globales, es capaz de recuperar el conjunto de datos de un formulario que han sido enviados desde el navegador para, después, poder trabajar con ellos. Las tres variables principales para realizar esta operación son:
		_POST: Array que contiene las variables pasadas a través del método POST. En versiones anteriores a la 4.2.0, se llamaba HTTP_POST_VARS.
		_GET: Array que contiene las variables pasadas a través del método GET. En versiones anteriores a la 4.2.0. se llamaba HTTP_GET_VARS.
		_REQUEST: Array que contiene las variables pasadas a través de cualquier mecanismo de entrada.
		
	</p>
</body>