<?php
    include "../models/conexion.php";
    session_start();
    if(isset($_SESSION['usuario'])){
        // Redirigir al usuario a la página de servicios
        header("location:../index.php?action=logeado");
        exit(); // Detener la ejecución del script
    }

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
                    $_SESSION['usuario'] = $usuario;
                    header("location:../index.php?action=logeado");
                }else{
                    echo "Contraseña incorrecta";
                }
            }else{
                echo "El usuario no existe";
            }
        }
    }
?>