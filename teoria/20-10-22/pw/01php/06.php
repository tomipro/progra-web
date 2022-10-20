<?php   
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

// https://www.php.net/manual/es/function.isset.php
// https://www.php.net/manual/es/language.variables.external.php
// https://www.w3schools.com/php/php_superglobals_post.asp
// https://www.w3schools.com/php/php_superglobals_get.asp


   if(isset($_GET["name"]) && isset($_GET["age"])) {
      
      echo "Nombre: ". $_GET["name"]. "<br />";
      echo "Edad:  ". $_GET['age']. " .";
      
      exit();
   }
   // <form action = "http://www.mipagina.com/datospersonas.php" method = "GET">
       // <form action = "http://localhost/mariano/phpinicial/05.php" method = "GET">
?>
<html>
   <body>
     <?php //echo $_SERVER['PHP_SELF'] ?>
      <form action = "<?php $_SERVER['PHP_SELF'] ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>





