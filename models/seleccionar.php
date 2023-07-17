<?php
    include 'conexion.php';
    $sqlSelect="select * from estudiantes";
    $respuesta=$conn->query($sqlSelect);
    $resultado=array();
    if($respuesta->num_rows>0){
        while($fila=$respuesta->fetch_array()){
            array_push($resultado,$fila);  
        }
    } else{
        $resultado="No hay estudiantes";
    }

    echo json_encode($resultado);
    
?>