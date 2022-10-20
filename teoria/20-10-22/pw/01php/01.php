<?php   

    echo ("<br/>"); 
    print("<h3>HTML embebido en PHP</h3>");
    print("<p>hola como va</p>");
    print("<p>hola como va</p>");
    
    $miVariable3 = 999;
    print("Mi 'variable3' es $miVariable3<br>");
    

    echo ("<hr><br/>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ejemplo 01</title>
</head>
<body>
      
   <h3>PHP embebido en HTML</h3>

   <?php
      
      $miVariable2 = 67;
      print("Mi 'variable2' es $miVariable2<br>");
      print("Mi 'variable3' es $miVariable3<br>");
      echo "<a href = './00.php'>Ejemplo anterio</a><br>";
      echo "<a href = './02.php'>Siguiente ejemplo</a>";

   ?>
   
</body>
</html>


