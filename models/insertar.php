<?php
    include 'conexion.php';
    $cedula=$_POST['Cedula'];
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $edad=$_POST['Edad'];
    $telefono=$_POST['Telefono'];
    $sqlInsertar="INSERT INTO estudiantes (cedula,nombre,apellido,edad,telefono)values('$cedula','$nombre','$apellido',$edad,'$telefono')";
    if ($mysqli->query($sqlInsertar)==true){
        echo json_encode("Se inserto");
    }else{
        echo json_encode("error: ".$sqlInsertar.$mysqli->error());
    }
    $mysqli->close();
?>