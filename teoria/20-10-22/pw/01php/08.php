<?php
include 'BaseDatos.php';
    $conn=conectarBD();
    $sql = "select * from pais where id in (3,4,5,6)";
    $result = consultaSQL($conn, $sql );
	
	//print(var_dump ($result));
    while ($fila = $result->fetch_assoc()) {   //http://php.net/manual/es/mysqli-result.fetch-assoc.php
        echo ( $fila["id"].",". $fila["nombre"]."</br>");
    } 


    desconectarBD($conn);




?>




