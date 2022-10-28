<?php
function iniciarSesion($usuario,$tipo){    
    $_SESSION['usuario']  = $usuario;
    $_SESSION['tipo'] = $tipo;
    $_SESSION['instante']   = time();
    
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: principal.php");
}
function signin(){
    echo 'Bienvenido al login ...';

    iniciarSesion('mariano@gmail.com','admin');
}
function main(){
    session_start();
    signin();    
}
main();
?>