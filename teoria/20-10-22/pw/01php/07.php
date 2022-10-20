<?php
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
echo "Conexion EXISTOSA";

// sql crear la consulta
$sql = "select * from pais";
$result = $conn->query($sql);
/*
echo("<br/>");
echo($result->num_rows);
echo("<br/>");
var_dump ($result);
echo("<br/>");
var_dump ($result->fetch_assoc());
echo("<br/>");
var_dump ($result->fetch_assoc());
*/

if ($result->num_rows > 0) 
{
	echo "<table><tr><th>ID</th><th>Nombre</th></tr>";
    // output data of each row
    			
    while($row = $result->fetch_assoc()) 
    {    	
        echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td></tr>";
    }
    echo "</table>";    
} 
else 
{
    echo "0 results";
}

// cerrar conexión
$conn->close();

?>




