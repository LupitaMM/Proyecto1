<?php
    require_once 'conexion.php';
    $IdProducto = $_GET['IdProducto'];
    $IdUsuario = $_GET['IdUsuario'];

    $sqlVerificar = "update carrito set Estado = 'Pagado' where IdUsuario = '$IdUsuario' AND Estado = 'En Carrito'";
    $resultadoVerificar = $conexion->query($sqlVerificar);  
    echo $sqlVerificar;
?>