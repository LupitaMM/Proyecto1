<?php
    require_once 'conexion.php';
    $IdUsuario = $_POST['IdUsuario'];
    $IdProducto = $_POST['IdProducto'];

    $sqlVerificar = "SELECT * FROM carrito WHERE IdProducto = '$IdProducto' AND IdUsuario = '$IdUsuario' and Estado != 'Pagado'";
    $resultadoVerificar = $conexion->query($sqlVerificar);  
    if ($resultadoVerificar->num_rows > 0) {
        $sqlActualizar = "UPDATE carrito SET Cantidad = Cantidad + 1 WHERE IdProducto = '$IdProducto' AND IdUsuario = '$IdUsuario' and Estado != 'Pagado'";
        $resultadoActualizar = $conexion->query($sqlActualizar);
        echo "Actualizado";
    }else{
        $sql = "insert into carrito VALUES ('$IdProducto', '', 1,'0.00','$IdUsuario','En Carrito')";
        $resultadoActualizar = $conexion->query($sql);
        echo $sql;
    }
    


?>
