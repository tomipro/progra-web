<?php

function configDB(){
    $strConf = array(
        "servername" => "localhost",
        "username" => "root",
        "password" => "",
        "dbname" => "ubicacion"
    );
    return $strConf;
}

function configTabla(){
  
    $conf = array(
                "hayBotonerABM"  => TRUE,      # TRUE tiene botonera de abm dentro de la tabla
                "campoClave" => "id",          
                "noCargaFila" => array()    # TRUE Muestra el camp clave en le front end
        );
    return $conf;
}

?>
