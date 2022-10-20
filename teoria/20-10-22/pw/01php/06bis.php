<?php 
// 06bis.php 
// REALIZADO CON BUENAS PRÁCTICAS DE PROGRAMACIÓN

/* GET 
El método GET produce una larga cadena que aparece en los registros del servidor, 
en el navegador de Ubicación: caja.

El método GET se limita a enviar hasta 1024 caracteres solamente.

Nunca utilice el método GET si tiene contraseña u otra información sensible que se 
envían al servidor.

GET no se puede utilizar para enviar datos binarios, como imágenes o documentos 
de texto, con el servidor.

Los datos enviados por el método GET se puede acceder mediante la variable 
de entorno QUERY_STRING.

El PHP provee $ _GET un matriz asociativa para acceder a toda la información 
que se envíe utilizando el método GET.
*/

function ayuda(){
    print ( "<a href = ' https://www.php.net/manual/es/language.variables.external.php'> (GET y POST)</a> <br>");
    print ( "<a href = ' https://www.php.net/manual/es/function.isset.php'>isset</a> <br>");
    print ( "<a href = ' https://www.w3schools.com/php/php_superglobals_post.asp'>POST</a> <br>");
    print ( "<a href = ' https://www.w3schools.com/php/php_superglobals_get.asp'>GET</a> <br>");
    
    ECHO("<hr>");
}
function crearBotonRedirige($url=""){
    // crea el html de un boton para redirigir CON JS.
    if ($url==""){
        $servidor='http://localhost';
        $paginaRelativa=  $_SERVER['PHP_SELF'];// '/pw/00-phpinicial/06bis.php';
        $url=$servidor.$paginaRelativa;        
    }
    $aux='"'."window.location.replace('$url');".'"';
    //$aux='"'."window.location.replace('http://localhost/pw/00-phpinicial/06bis.php');".'"';
    return "<button onclick= " .$aux. "> Volver</button>";  
}

function recibir_mostrar(){
    // Si recibe datos, entonces muestra los datos recibidos del cliente
    // si no recibe datos, entonces muestra el formulario de carga
    if(isset($_GET["name"]) && isset($_GET["age"])) {   
        echo "Nombre: ". $_GET["name"]. "<br />";
        echo "Edad:  ". $_GET['age']. "<br />";
        echo crearBotonRedirige();
     }else{
        mostrarForm();
     }
}

function mostrarForm(){
    $paginaRelativa = $_SERVER['PHP_SELF'];
    $str = <<<FORM
    <html>
    <body>
        {$paginaRelativa}
        <!--<form action = "<{$paginaRelativa}>" method = "GET">-->
        <form action = "/pw/00-phpinicial/06bis.php" method = "GET">
            Name: <input type = "text" name = "name" />
            Age: <input type = "text" name = "age" />
            <input type = "submit" />
        </form>
        
    </body>
    </html>
FORM;
    echo $str;
}

function main(){
    //echo $_SERVER['PHP_SELF'].<br>;
    ayuda();
    recibir_mostrar();  
    
}
main();
?>
