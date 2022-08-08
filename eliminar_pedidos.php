<?php
    include("conexion.php");

    $id_borrar=$_GET['id'];

    $sql=("DELETE FROM pedidos where No_pedido='$id_borrar'");
    $query=mysqli_query($conexion,$sql);
    header("Location:../php/consulta_pedidos.php");
    
?>