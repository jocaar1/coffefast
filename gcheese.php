<?php
    include ("conexion.php");
    session_start();
    $name = $_POST['name'];

$insertar = mysqli_query($conexion,"INSERT INTO pedidos VALUES ('','$name', 'Grilled Cheese', '60')");

if($insertar){
    header("Location: ../HTML/Complementos.html");
    echo '<script> alert("Guardado Correctamente");}
    </script>';
}else{
    header("Location: ../HTML/Gcheese.html");
    echo '<script> alert("Guardado Incorrectamente");}
    </script>';
}
?>