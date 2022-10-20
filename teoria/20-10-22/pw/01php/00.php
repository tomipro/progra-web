<?php
   /* 
      Esto es un comentario multilinea
   */ 

   // comentario de una línea

   // Todas las sentencia llevan ; (punto y coma) al final

   /*
   print ( "<a href = 'http://www.mclibre.org/consultar/php/'>
   http://www.mclibre.org/consultar/php/</a> <br>");
   echo "Aperturna y cierre que indica que dentro hay codigo php <?php  xxxx     ?>   <br>";
   echo( "El barra n no funciona \n, pero si el <br> veamos <br>");
*/

// ---------------------------------------------------------------------------------
// links de ayuda
print ( "<a href = 'http://www.mclibre.org/consultar/php/'> AYUDA (mclibre)</a> <br>");
print ( "<a href = 'https://www.w3schools.com/php/default.asp'> AYUDA (w3school)</a> <br>");
print ( "<a href = 'https://www.w3schools.com/php/default.asp'> AYUDA (w3school)</a> <br>");
print ( "<a href = 'https://www.php.net/manual/es/index.php'> AYUDA (oficial español)</a> <br>");
print ( "<a href = 'https://www.php.net/'> AYUDA (oficial ingles)</a> <br>");
echo ("<br/>");
//expresiones
print ( "<a href = 'http://php.net/manual/es/language.expressions.php'>expresiones en php</a> <br>");
echo ("<br/>");
echo ("<hr><br/>");

// ---------------------------------------------------------------------------------

// S A L I D A  -  I M P R E S I Ó N 
print ( "<br> <a href = 'https://www.php.net/manual/es/function.echo.php'>ECHO</a> <br>\n");  
print ( "<a href = 'https://www.php.net/manual/es/function.print.php'>PRINT</a> <br>\n");  
echo ("<br/>");
echo ("hola mundo<br/>");
echo "hola mundo<br/>";

print("hola mundo<br/>");

echo ("<br/>");

// ---------------------------------------------------------------------------------

// C O N C A T E N A R   T E X T O 
// Se utiliza el punto para contenar texto
print ( "<a href = 'https://www.php.net/manual/es/language.operators.string.php'>OPERADORES PARA STRING</a> <br>\n");  

print("Hola"."Mundo"."Concatenado"."\n<br/>");
echo ("<br/>");

// ---------------------------------------------------------------------------------

// C O N S T A N T E  
print ( "<br> <a href = 'http://php.net/manual/es/language.constants.php'>CONSTANTES</a> <br>\n");  
const MIN_VALUE = 1.2;        // Una forma de definir
define("DIAS_SEMANA",7);      // Otra forma de definir
define("TITULO","El lenguaje PHP");

print("constante 'MIN_VALUE' CONTIENE => ".MIN_VALUE." || TIPO =>  ".gettype(MIN_VALUE)."\n<br/>");
echo ("<br/>");
print("constante 'DIAS_SEMANA' CONTIENE => ".DIAS_SEMANA." || TIPO =>  ".gettype(DIAS_SEMANA)."\n<br/>");
echo ("<br/>");
print("constante 'TITULO' CONTIENE => ".TITULO." || TIPO =>  ".gettype(TITULO)."\n<br/>");
echo ("<br/>");

// ---------------------------------------------------------------------------------

// V A R I A B L E S  Y TIPOS
   
//variables
print ( "<a href = 'http://php.net/manual/es/language.types.php'>VARIABLES - TIPOS</a> <br>");
    
$var1="hola";    // is_string()
print("variable 'var1' CONTIENE => ".$var1." || TIPO => ".gettype($var1)."\n<br/>");
echo ("<br/>");

$entero=123;    //is_int()  //is_nan($entero);
print("variable 'entero' CONTIENE => ".$entero." || TIPO => ".gettype($entero)."\n<br/>");
echo ("<br/>");

$real=123.12;   //is_float()
print("variable 'real' CONTIENE => ".$real." || TIPO => ".gettype($real)."\n<br/>");
echo ("<br/>");

$esNumero=TRUE; //is_nan($entero); //is_bool()
print("variable 'esNumero' CONTIENE => ".$esNumero." || TIPO =>  ".gettype($esNumero)."\n<br/>");
echo ("<br/>");
$esNumero2= FALSE;
print("variable 'esNumero' CONTIENE => ".$esNumero2." || TIPO =>  ".gettype($esNumero2)."\n<br/>");

// ---------------------------------------------------------------------------------

echo "<a href = './0.php'>Ejemplo anterio</a><br>";
echo "<a href = './01.php'>Siguiente ejemplo</a>";

?>
