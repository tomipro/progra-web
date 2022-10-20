<?php   
/* STRING */
    $largo = strlen("Hello world!");
   //$largo=10;
   print($largo."\n<br/>");
   echo "strlen(\"Hello world!\")  = > ",strlen("Hello world!"),"\n<br/>";
   echo "str_word_count(\"Hello world!\") = > ",str_word_count("Hello world!"),"\n<br/>"; // outputs 2
   
   echo "strrev(\"Hello world!\") = > ",strrev("Hello world!"),"\n<br/>"; // outputs !dlrow olleH
   
   echo "strpos(\"Hello world!\", \"world\") = > ",strpos("Hello world!", "world"),"\n<br/>"; // outputs 6  
   echo("<br/>");    
   $result = str_replace("world", "Dolly", "Hello world!");
   echo "str_replace(\"world\", \"Dolly\", \"Hello world!\") = > ",$result,"\n<br/>" ; // outputs Hello 
   echo("<br/>");

   echo("= = = = H E R E D O C = = = =");
   echo("<br/><br/>");

   

$str = <<<PRUEBA
   Ejemplo de una cadena
   expandida en varias líneas
   empleando la sintaxis heredoc.<br/>
PRUEBA;
echo($str);


$nombre = 'MARIANO';
$acción = 'Enseñanado PHP';
$quienes='alumnos';
$str2 =  <<<PRUEBA2
   <br/>Mi nombre es {$nombre}. 
   Estoy {$acción} .....
   a los {$quienes} ...
   listo !!<br/>
PRUEBA2;
echo($str2);





function obtenerDNI($nombre3 ){
   $dni=9999;
   if ($nombre3 == "MARIANO"){
      $dni=1234;
   }
   else if($nombre3 =="DIEGO"){
      $dni=5678;
   }
   return $dni;
}
function obtenerEdad($dni){
   $edad=-1;
   if ($dni==1234){
      $edad=22;
   }
   else if ($dni==5678){
      $edad=43;
   }
   return $edad;
}

function accion(){
   return "Enseññando a programar en PHP";
}

$nombre3 = 'MARIANO';

$obtenerDNI = 'obtenerDNI';
$obtenerEdad = 'obtenerEdad';
$accion='accion';

$str3 =  <<<PRUEBA3
<br/>Mi nombre es {$nombre3}. <br/>
Mi edad es: {$obtenerEdad(1234)}.<br/>
Mi dni es {$obtenerDNI($nombre3)}.<br/>
Estoy haciendo ...{$accion()}..
blabla ...
listo !!<br/>
PRUEBA3;
echo($str3);



?>

