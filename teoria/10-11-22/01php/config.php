<?php

function configDB(){
    #string de conexión a la base de datos
    $arrConf = array(
        "servername" => "localhost",
        "username"   => "root",
        "password"   => "",
        "dbname"     => "ubicacion"
    );
    return $arrConf;
}

function configTabla(){
  
    $conf = array(
                "hayBotonerABM"  => TRUE,     # TRUE tiene botonera de abm dentro de la tabla
                "campoClave"     => "id",     # Es el nombre del campo clave     
                "noCargaFila"    => array()   # Agregar al array los nombres de columnas que 
                                              #   no se deseen visualizar en el FE
        );
    return $conf;
}

?>
