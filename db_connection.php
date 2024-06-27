<?php
    $connection = mysqli_connect("localhost", "cpses_ghljv1wslw", ""; "Users")

    if($connection){
        echo 'Conexion Exitosa';
    }else{
        echo 'No se pudo conectar a la Base de Datos';
    }



?>