<?php
    //Indicar la conexion de la pagina conexionbs.php
    include "conexion.php";
    // Para comenzar una sesion, parecido al function de php
    session_start();

    // Mandar a llamar los inputs y el boton del formulario de la pagina de login y guardando los datos que se hayan puesto en ellos
    if(isset($usuario) || isset($pass)){
        $usuario = $_POST ["usuario"];
        $pass = $_POST["contraseña"];
    
        $validad_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$pass'");
    }

    

    // Condicion para acceder a la pagina, d elo contrario mostrara un mensaje
    if(mysqli_num_rows($validad_login)>0){
        header("Location: ../html/index.html");
    }
    else {
        header("Location: ../html/login.html");
    }

?>