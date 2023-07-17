<?php
    include 'conexion.php';
    $cedula=$_POST['Cedula'];
    $nombre=$_POST['Nombre'];
    $apellido=$_POST['Apellido'];
    $edad=$_POST['Edad'];
    $telefono=$_POST['Telefono'];
    $sqlInsertar="UPDATE estudiantes SET nombre='$nombre',apellido='$apellido',edad=$edad,telefono='$telefono' WHERE cedula='$cedula' ";
    if ($mysqli->query($sqlInsertar)==true){
        echo json_encode("Se actualizo");
    }else{
        echo json_encode("error: ".$sqlInsertar.$mysqli->error());
    }
    $mysqli->close();
?>