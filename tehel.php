<?php
    include ("conexion.php");
    session_start();
    $name = $_POST['name'];

$insertar = mysqli_query($conexion,"INSERT INTO pedidos VALUES ('','$name', 'Té Helado', '55')");

if($insertar){
    header("Location: ../HTML/Bebidasfrias.html");
    echo '<script> alert("Guardado Correctamente");}
    </script>';
}else{
    header("Location: ../HTML/Tehel.html");
    echo '<script> alert("Guardado Incorrectamente");}
    </script>';
}
?>