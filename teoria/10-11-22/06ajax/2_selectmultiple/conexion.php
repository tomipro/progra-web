<?php
function conectarBD()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ubicacion";
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Checkear conexión
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    } 
    //echo "Conexion EXISTOSA";
    return $conn;
}

function consultaSQL($conn, $sql) 
{   
    if(!empty($sql))
    {
        $result = $conn->query($sql); 
        $i=0;
        $datos=[];
        if($result)
        {
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
            while(isset($row))
            {
                $datos[$i]=$row ;
                //printf ("%s (%s)\n", $row[0], $row["nombre"]);
                $row = mysqli_fetch_array($result, MYSQLI_BOTH);
                $i++;
            }
            /* liberar la serie de resultados */
            mysqli_free_result($result);
            return $datos;
        }
       
    }
    return NULL;
    

    /* array numérico */
    //$row = $result->fetch_array(MYSQLI_NUM);
    //printf ("%s (%s)\n", $row[0], $row[1]);
    /* array asociativo */
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //printf ("%s (%s)\n", $row["id"], $row["nombre"]);
}


function desconectarBD($conn)
{
    // cerrar conexión
    $conn->close();
}
?>