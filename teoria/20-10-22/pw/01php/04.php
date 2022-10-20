<?php

   function arreglo_1(){

      
      /* 'Primer' método */
      $miArr=["a","bc","www","123"];

      print("</br> Primer método para crear un array, (Manualmente). Arreglo</br>");
      print("</br> Asi imprime una matriz completa con print_r</br>");
  
      print("</br>-------- Recorrido con foreach --------</br>");

      foreach( $miArr as $item){
         echo $item."<br>";
      }
      print("</br>------------------------------------------</br>");

   }
   

   function arreglo_2(){
      /* Segundo método para crear un array. Arreglo*/
      print("</br> Segundo método para crear un array. Arreglo</br>");
         
      $numeros = array( 1, 2, 3, 4, 5);          // definicion de variable y asignación
      print("tipo : ".gettype($numeros)."</br>");
      print("Tamanio de arreglo: ".sizeof($numeros) );
      
      print("</br>-------- Recorrido con foreach --------</br>");

      foreach( $numeros as $num ) {           // recorrido   
         echo "Valor es $num <br />";
      }
      print("</br>------------------------------------------</br>");  
      print ( "<br><br>");
   }

   function arreglo_3(){

      /* Tercer método para crear un array. Arreglo*/
      print("</br> Tercer método para crear un array. Arreglo</br>");
      print ( "<a href = 'http://php.net/manual/es/ref.array.php'>Funciones de array</a> <br>");
      print ( "<a href = 'https://www.mclibre.org/consultar/php/lecciones/php-matrices.html#multidimensionales'>Funciones de array</a> <br>");
      print ( "<br>");

         $arrN = array();                     // definir array
         array_push($arrN, "Uno");            // cargar 
         array_push($arrN, "Dos");
         array_push($arrN, "tres");
         array_push($arrN, "cuatro");

         print("tipo : ".gettype($arrN)."</br>");
         print("Tamanio de arreglo: ".sizeof($arrN));

         print("</br>-------- Recorrido con foreach --------</br>");
         foreach( $arrN as $num ) {           // recorrido del array
            echo "Valor es $num <br />";
         }
         print("</br>------------------------------------------</br>");  
         print ( "<br><br>");
         
         

   }

   function arreglo_4(){
      /* Primer metodo para crear un arreglo asociativo*/
      
      print ( "<a href = 'https://www.php.net/manual/es/language.types.array.php'>Array Asociativo</a> <br>");
      print ( "<a href = 'https://www.php.net/manual/es/function.array-keys.php'>Devuelve todas las claves de un array</a> <br>");
      print ( "<a href = 'https://www.php.net/manual/es/function.array-values.php'>Devuelve todos los valores de un array</a> <br>");
           

      print("</br> Primer metodo para crear un arreglo asociativo</br>");
      print("</br> La clave puede ser un integer o un string. El valor puede ser de cualquier tipo.</br>");
      $salaries = array("Claudia" => 2000, "Diego" => 1000, "Zara" => 500);
      // python -> salaries = {"Claudia" : 2000, "Diego" : 1000, "Zara" : 500}

      echo "Salary of Claudia is ". $salaries['Claudia'] . "<br />";
      echo "Salary of Diego is ".  $salaries['Diego']. "<br />";
      echo "Salary of zara is ".  $salaries['Zara']. "<br />";
      print ( "<br>");

      /* Segundo metodo para crear un arreglo asociativo, modificación*/
      print("</br> Segundo metodo para crear un arreglo asociativo, modificación</br>");
      $salaries['Claudia'] = "high";
      $salaries['Diego'] = "medium";
      $salaries['Zara'] = "low";

      echo "Salary of Claudia is ". $salaries['Claudia'] . "<br />";
      echo "Salary of Diego is ".  $salaries['Diego']. "<br />";
      echo "Salary of zara is ".  $salaries['Zara']. "<br />";
      print ( "<br><br>");

      print("</br>-------- Recorrido con foreach --------</br>");
      foreach($salaries as $clave => $valor) {
            echo "$clave, $valor <br>";
      }
      print ( "<br><br>");
      print("</br>------------------------------------------</br>"); 
   }

   function arreglo_5(){

      /* Arreglo multi-dimensional */
      print("</br> Arreglo multi-dimensional</br>");
      $notas = array( 
               "Claudia" => array (
                  "physics" => 35,
                  "maths" => 30, 
                  "chemistry" => 39
               ),
               
               "Diego" => array (
                  "physics" => 30,
                  "maths" => 32,
                  "chemistry" => 29
               ),
               
               "Zara" => array (
                  "physics" => 31,
                  "maths" => 22,
                  "chemistry" => 39
               )
            );
            
            /* Acceso a los valores multi-dimensional array  */
            print("</br> Acceso a los valores multi-dimensional array</br>");
            echo "Marks for Claudia in physics : " ;
            echo $notas['Claudia']['physics'] . "<br />"; 
            
            echo "Marks for Diego in maths : ";
            echo $notas['Diego']['maths'] . "<br />"; 
            
            echo "Marks for Zara in chemistry : " ;
            echo $notas['Zara']['chemistry'] . "<br />"; 

            print("</br>-------- Recorrido con foreach --------</br>");
            foreach ($notas as $nombre => $arrMaterias){               
               foreach ($arrMaterias as $materia => $nota){
                  echo "$nombre,$materia, $nota <br>";
               }
            }
            print ( "<br><br>");
            print("</br>------------------------------------------</br>"); 

   }
   function arreglo_6(){

         /* Arreglo multi-dimensional */
      print("</br> Arreglo multi-dimensional</br>");
      $marks = array( 
               "Claudia" => array (
                  "physics" => 35,
                  "maths" => 30, 
                  "chemistry" => 39
               ),
               
               "Diego" => array (
                  "physics" => 30,
                  "maths" => 32,
                  "chemistry" => 29
               ),
               
               "Zara" => array (
                  "physics" => 31,
                  "maths" => 22,
                  "chemistry" => 39
               )
            );
            
            


   }

   function funcioneDebug(){
      print ( "<a href = 'https://www.php.net/manual/es/function.var-dump.php'>var_dump()</a> <br>");
      print ( "<a href = 'https://www.php.net/manual/es/function.print-r.php'>print_r()</a> <br>");
      print ( "<a href = 'https://www.php.net/manual/es/function.die.php'>die()</a> <br>");

      $salaries = array("Claudia" => 2000, "Diego" => 1000, "Zara" => 500);
      print ( "Funciones para debuguer un programa</br></br>");

      // die("************ Terminación expontánea del programa *********");
      var_dump($salaries);
      echo "<br><br>";
      print_r($salaries);



      
   }

   function main(){
   
      
      print ( "<a href = 'http://php.net/manual/es/language.types.array.php'>Array(oficial)</a> <br>");
      print("<hr>");
      arreglo_1();
      print("<hr>");
      arreglo_2();
      print("<hr>");
      arreglo_3();
      print("<hr>");
      arreglo_4();
      print("<hr>");
      arreglo_5();   
      print("<hr>");
      arreglo_6();   
      print("<hr>");

      funcioneDebug();

      echo "<br><a href='./03.php'>Ejemplo anterior</a><br>";
      echo "<a href='./05.php'>Siguiente ejemplo</a>";
  

   
   }
   
   main();
