<?php

class mvcController{
    
    function plantilla (){
        include 'views/template.php';
    }
    function enlacesPaginasController(){
        if(isset($_GET['action'])){
            $enlacessController=$_GET['action'];
        }  
        else{
            $enlacessController='inicio.php';
        }

        $respuesta= EnlacesPaginas::enlacesPaginasModel($enlacessController);
        include $respuesta;
    }
}
?>