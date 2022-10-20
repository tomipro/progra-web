<?php

// F U N C I O N E S 
function ayuda()
{
   print("<br> <a href = 'http://php.net/manual/es/language.functions.php'>FUNCIONES</a> <br>");
}


// 1) Una simple funcion sin parámetros y sin retorno
function miFuncion()
{
   echo ("Hola desde una función");
}

// 2) Una  funcion con un parámetros y sin retorno
function miFuncion2($nombre)
{
   echo ("Buenas Tardes: " . $nombre . "</br>");
}

// 3) Una  funcion con un varios parámetros y sin retorno
function miFuncion3($mensaje, $nombre)
{
   echo ($mensaje . " -> " . $nombre . "</br>");
}

// 4) Una  funcion con un varios parámetros y CON retorno
function miFuncion4($nombre, $mensaje)
{
   $reultado = $mensaje . " -> " . $nombre;
   return $reultado;
}

function sumar($x, $y)
{
   // va el codigo de la funcion..
   $resultado = $x + $y;
   return $resultado;
}


function multiplicar($x, $y)
{
   $resultado = $x * $y;
   return $resultado;
}

// Una función llama a otras funciones para cumplir su objetivo
function informe($a, $b)
{
   $resultado =  $a . " + " . $b . " = " . sumar($a, $b);
   $resultado = $resultado . "<br>";
   $resultado = $resultado . $a . " * " . $b . " = " . multiplicar($a, $b);
   $resultado = $resultado . "<br>";

   return $resultado;
}

function main()
{
   ayuda();
   print("- - - - - - - - - - - - - - - - - - - - - - - -<br>");
   print("<span style='font-weight: bold;'>Distintas formas de trabajar con funciones</span><br>");
   miFuncion();
   print("<br>");
   miFuncion2("Mariano");
   print("<br>");
   miFuncion3("Buenos Días", "Lucia");
   print(miFuncion4("Buenas Noches", "Juan"));
   print("<br>");

   print("- - - - - - - - - - - - - - - - - - - - - - - -<br>");
   print("<span style='font-weight: bold;'> Funciones que retornan resultados</span><br>");
   $a = 22;
   $b = 10;
   print("<br> La suma de " . $a . " + " . $b . " es= " . sumar($a, $b) . "<br>");
   print("<br> El Producto de " . $a . " * " . $b . " es= " . multiplicar($a, $b) . "<br>");
   print("<br>");

   print("- - - - - - - - - - - - - - - - - - - - - - - -<br>");
   print("<span style='font-weight: bold;'> Un función que llama a otras funciones y retorna resultado</span><br>");
   print(informe($a, $b));
   print("- - - - - - - - - - - - - - - - - - - - - - - -<br><br>");
   echo "<a href='./01.php'>Ejemplo anterior</a><br>";
   echo "<a href='./03.php'>Siguiente ejemplo</a>";
}
main();

?>

<!--
<html>
   <body>
      
      <?php

      main();
      ?>
      
   </body>
</html>
-->