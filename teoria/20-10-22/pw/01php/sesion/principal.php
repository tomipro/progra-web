<?php

function main(){
  session_start(); 
  // Controlo si hay usuario logueado en el sistema.
  if(isset($_SESSION['usuario'])){
    //Hay un usuario logueado
    echo 'Bienvenido a la página PRINCIPAL';
      echo '<br />';
      echo $_SESSION['usuario'].'<br />';  // mariano@gmail.com
      echo $_SESSION['tipo'].'<br />';    // admin
      echo date('Y m d H:i:s', $_SESSION['instante']);
      echo '<br /><a href="cerrar-sesion.php"> Cerrar Sesion</a>';
  
    }else{
      //No hay usuario logueado
      echo '</br>Login Usuario:','<a href="login.php"> Login</a>';
    }
}
main();

?>