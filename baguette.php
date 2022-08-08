<?php
    include ("conexion.php");
    session_start();
    $name = $_POST['name'];

$insertar = mysqli_query($conexion,"INSERT INTO pedidos VALUES ('','$name', 'Baguette', '85')");

if($insertar){
    header("Location: ../HTML/Complementos.html");
    echo '<script> alert("Guardado Correctamente");}
    </script>';
}else{
    header("Location: ../HTML/Baguette.html");
    echo '<script> alert("Guardado Incorrectamente");}
    </script>';
}
?>