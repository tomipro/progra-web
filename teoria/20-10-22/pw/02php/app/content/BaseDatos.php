<?php
require_once 'config.php';
//http://php.net/manual/es/mysqli-result.fetch-array.php
//https://cybmeta.com/isset-is_null-y-empty-diferencias-y-ejemplos-de-uso

function conectarBD($conf) {
    //string de conexion
    if(!isset($conf))
        $conf = configDB();
    
    // Crear conexión
    $conn = new mysqli($conf['servername'], $conf['username'],
                       $conf['password'] , $conf['dbname']);
    
    // Checkear conexión
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    } 
    //echo "Conexion EXISTOSA";
    return $conn;
}
function cargarTitulos($row){
    if (isset($row)){
        $keysTabla=array_keys($row);
        $titulos =[];
        $j=1;
        while ($j<count($keysTabla)) {
            array_push($titulos ,$keysTabla[$j]);
            $j=$j+2;
        }
    } 

    return $titulos;
}

function consultaSQL($conn, $sql) {   
    $dataTable=NULL;
    if(!empty($sql)){
        $result = $conn->query($sql);         
        $datos=[];
        $titulos=[];
        $dataTable=[];
        if($result) {
            # obtener tabla de datos de la bd
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
            $titulos=cargarTitulos($row);    
            # agregar los datos de la tabla a $datos
            $i=0;
            while(isset($row)) {
                $datos[$i]=$row ;
                //printf ("%s (%s)\n", $row[0], $row["nombre"]);
                $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                $i++;
            }

            # liberar la serie de resultados 
            mysqli_free_result($result);

            # array $dataTable con los datos y los titulos
            array_push($dataTable,$titulos);
            array_push($dataTable,$datos);            
        }       
    }
    return $dataTable;
    

    /* array numérico */
    //$row = $result->fetch_array(MYSQLI_NUM);
    //printf ("%s (%s)\n", $row[0], $row[1]);
    /* array asociativo */
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //printf ("%s (%s)\n", $row["id"], $row["nombre"]);
}

function consultarBD($sql,$conf){
	##############################################
	#### C O N S U L T A
	$dataTable=NULL;
	if ($sql!=""){
		$conn  = conectarBD($conf);               # conectar a base de datos
		$dataTable = consultaSQL($conn, $sql );  # enviar la consulta a BD y recibir el resultado
		desconectarBD($conn);                # desconectar la base de datos
	}	
	# var_dump($dataTable);
	# die();
	return  $dataTable;
}

function desconectarBD($conn) {
    // cerrar conexión
    $conn->close();
}


?>




