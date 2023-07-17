<?php
    include 'conexion.php';
    $cedula=$_POST['cedula'];
    $sqlEliminar="DELETE FROM ESTUDIANTES WHERE cedula='$cedula'";
    if($mysqli->query($sqlEliminar)==true){
        echo json_encode("Se elimino");
    }
    else{
        echo json_encode("error: ".$sqlInsertar.$mysqli->error());
    }
    $mysqli->close();
?>