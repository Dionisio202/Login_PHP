<?php

    $servername="localhost";
    $username="root";
    $password="";
    $databasename="cuarto";

    $conn=mysqli_connect($servername, $username, $password, $databasename);

    $mysqli = new mysqli($servername, $username, $password, $databasename);

    if(!$mysqli){
        die("error de conexion" . mysqli_connect_error());
    }

?>