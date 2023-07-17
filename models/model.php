<?php
class EnlacesPaginas{
    static function enlacesPaginasModel($enlacesModel){
        if ($enlacesModel=="nosotros" || $enlacesModel=="contactanos"){
            $module="views/interfaces/" . $enlacesModel . ".php";
        }
        else if($enlacesModel=="servicios"){
            header("location:../views/login.php");
        }
        else if($enlacesModel=="logout"){
            session_destroy();
            $module="views/interfaces/inicio.php";
        }
        else if($enlacesModel=="logeado"){
            $module="views/interfaces/servicios.php";
        }
        else{
            $module="views/interfaces/inicio.php";
        }
        return $module;
    }   
}

?>