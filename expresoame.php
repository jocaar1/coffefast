<?php
    include ("conexion.php");
    session_start();
    $name = $_POST['name'];

$insertar = mysqli_query($conexion,"INSERT INTO pedidos VALUES ('','$name', 'Expresso Americano', '55')");

if($insertar){
    header("Location: ../HTML/Bebidascalienes.html");
    echo '<script> alert("Guardado Correctamente");}
    </script>';
}else{
    header("Location: ../HTML/Expresoamericano.html");
    echo '<script> alert("Guardado Incorrectamente");}
    </script>';
}
?>