<?php
    require_once 'conexion.php';
    $IdUsuario = $_GET['IdUsuario'];

    $sqlVerificar = "SELECT SUM(cantidad) as total FROM carrito WHERE IdUsuario = '$IdUsuario' AND Estado = 'En Carrito'";
    $resultadoVerificar = $conexion->query($sqlVerificar);  
    $row = mysqli_fetch_assoc($resultadoVerificar);
    echo $row['total'];

    

?>