<?php

    Include 'db_connection.php';

    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Correo = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];
    $Contraseña = hash['sha512', $Contraseña];

    $query = "INSERT INTO Users(Nombres, Apellidos, Correo, Contraseña)
            Values('$Nombres','$Apellidos', '$Correo', '$Contraseña')";
    
    $verificar_correo = mysqli_query($connection; "SELECT * FROM Users WHERE Correo='$Correo' ");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Correo se encuentra Registrado, Intenta con uno diferente");
                window.location = "../index.php";
            </script>
        ';
    exit();
    }

    $ejecutar = mysqli_query($connection, $query);
    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Usuario no se pudo registrar");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($connection);
?>