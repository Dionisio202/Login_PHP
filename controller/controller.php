<?php

class mvcController{
    
    function plantilla (){
        include 'views/template.php';
    }
    function enlacesPaginasController(){
        session_start();
        if(isset($_GET['action'])){
            $enlacessController=$_GET['action'];
            if ($enlacessController == 'logeado' && !isset($_SESSION['usuario'])) {
                // Redirigir al usuario al formulario de inicio de sesión
                $enlacessController = 'servicios';
            }
        }  
        else{
            $enlacessController='inicio.php';
        }
        $respuesta= EnlacesPaginas::enlacesPaginasModel($enlacessController);
        include $respuesta;
    }
}
?>