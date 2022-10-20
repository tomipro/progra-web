<?php
//print ( "<a href = 'http://www.mclibre.org/consultar/php/lecciones/php-estructuras-control.html'>Estructuras de control</a> <br>");
//print ( "<a href = 'http://php.net/manual/es/language.control-structures.php'>Estructuras de control</a> <br>");


// OPERADORES DE COMPARACIÓN utilizados en una condición
//  ==    !=    >=     <=    <    >   

// OPERADORES DE RELACION utilizados en una condición
//  &&  (es el 'Y' lógico)   || (es el 'O' lógico)
//  and (es el 'Y' lógico)   or (es el 'O' lógico)


function condicionalSimple($a, $b)
{
   print("</br> CONDICIONAL SIMPLE: SALIDA DEL IF </br>");
   if ($a == $b) {
      // bloque por verdadero
      print("Cadenas iguales.<br>");
   } else {
      // bloque por falso
      print("Cadenas distintas.<br>");
   }
}

function condicionalMultiple($a, $b)
{
   print("</br> CONDICIONAL MULTIPLE: SALIDA DEL IF </br>");
   if ($a == "hola") {
      print("AAA.<br>");
   } elseif ($a == "holas") {
      print("BBB.<br>");
   } else {
      print("CCC.<br>");
   }
}

function condicional($a, $b)
{
   condicionalSimple($a, $b);
   condicionalMultiple($a, $b);
}

function cicloWhile()
{
   print("<br><br>");
   print("</br> CICLO WHILE </br>");
   $a = 0;
   $b = 0;

   $i = 0;
   $num = 50;
   while ($i < 10) {
      $num--;            //$num = $num - 1  
      $i++;              //$i = $i +1
      echo ("While i = $i, num = $num <br>");
   }
}

function cicloFor()
{
   print("<br><br>");
   print("</br> CICLO FOR </br>");
   $a = 0;
   $b = 0;

   for ($i = 0; $i < 5; $i++) {
      $a += 10;
      $b += 5;
      echo ("For a = $a, b = $b <br>");
   }
   print("<br><br>");
}

function cicloDoWhile()
{
   print("</br> CICLO DO WHILE </br>");
   $i = 0;
   $num = 0;

   do {
      $i++;
      echo ("do  while i = $i <br>");
   } while ($i < 10);
   print("<br><br>");
}

function cicloFor2()
{
   print("</br> CICLO FOR EACH  </br>");
   $array = array(1, 2, 3, 4, 5);     // equivalente python a ->  // [1,2,3,4,5]
   foreach ($array as $value) {       // en python -> for value in array:
      echo ("Valor = $value <br />");
   }
}

function ciclos()
{
   cicloWhile();
   cicloFor();
   cicloFor2();
   cicloDoWhile();
}

function main()
{
   print("<a href = 'https://www.php.net/manual/es/language.operators.php'>Operadores</a> <br>");
   print("<a href = 'http://php.net/manual/es/language.control-structures.php'>Estructuras de control (oficial)</a> <br>");
   print("<a href = 'http://www.mclibre.org/consultar/php/lecciones/php-estructuras-control.html'>Estructuras de control (mclibre)</a> <br>");


   $a = "hola";
   $b = "holas";
   condicionalSimple($a, $b);
   condicionalMultiple($a, $b);

   ciclos();
   echo "<a href='./02.php'>Ejemplo anterior</a><br>";
   echo "<a href='./04.php'>Siguiente ejemplo</a>";
}

main();
