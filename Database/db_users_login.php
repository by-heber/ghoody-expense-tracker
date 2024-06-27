<?php

    session_start();

    include '$db_connection.php';

    $correo = $_POST['Correo'];
    $contraseña = $_POST['Contraseña'];
    $Contraseña = hash['sha512', $Contraseña];

    $validar_login = mysqli_query($connection, "SELECT * FROM Users WHERE correo='$correo'
    and contraseña='$contraseña'");
    if(mysqli_num_rows($verificar_login) > 0){
        $_SESSION['Users'] = $correo;
        header("location: welcome.php");
    exit;
    }else{    
        echo '
            <script>
                alert("Correo no se encuentra Registrado, Intenta con uno diferente");
                window.location = "../index.php";
            </script>
        ';
    exit();
    }

?>