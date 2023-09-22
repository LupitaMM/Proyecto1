<?php
    require_once 'conexion.php';
    $IdUsuario = $_GET['IdUsuario'];
    $IdProducto = $_GET['IdProducto'];

    $sqlVerificar = "delete from carrito WHERE IdUsuario = '$IdUsuario' AND Estado = 'En Carrito' and IdProducto = '$IdProducto'";
    $resultadoVerificar = $conexion->query($sqlVerificar);  
    echo $sqlVerificar;

    

?>