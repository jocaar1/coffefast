<?php



    $localhost = "localhost:3306";

    $usuario = "root";

    $password = "";

    $nameDB = "coffeefast";



    $conexion = mysqli_connect($localhost,$usuario,$password,$nameDB);



    $db = mysqli_select_db ($conexion, $nameDB);



    if(!$conexion){

        die("La conexión es fallida". mysqli_connect_error());

        exit();

    }else{


    }



?>