<?php
    include "models/conexion.php";

    if(!empty($_POST["ingresar"])){
        if(empty($_POST["usuario"])){
            echo "El campo usuario está vacio";
        }
        else if(empty($_POST["contrasena"])){
            echo "El campo contraseña está vacio";
        }else{
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $sql=$mysqli->query("SELECT * FROM usuarios WHERE usuario='$usuario'");
            if($sql->num_rows>0){
                $datos=$sql->fetch_array();
                if($datos['password']===$contrasena){
                    $redirectionUrl = 'index.php?action=servicios';
                
                    $jsRedirect = <<<EOT
                    <script>
                      sessionStorage.setItem('user_id', '$results[id]');
                      window.location.href = '$redirectionUrl';
                    </script>
                    EOT;
                  
                    echo $jsRedirect;

                    // header("location:../index.php?action=logeado");
                }else{
                    echo "Contraseña incorrecta";
                }
            }else{
                echo "El usuario no existe";
            }
        }
    }
?>