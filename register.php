<?php
    include ("conexion.php");
    session_start();
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    
$insertar = mysqli_query($conexion,"INSERT INTO usuarios VALUES ('$usuario', '$email', '$contraseña')");

if($insertar){
    header("Location: ../HTML/login.html");
    echo '<script> alert("Guardado Correctamente");}
    </script>';
}else{
    header("Location: ../HTML/register.html");
    echo '<script> alert("Guardado Incorrectamente");}
    </script>';
}
?>