<?php
require_once 'conexion.php';
$IdUsuario = $_GET['IdUsuario'];

$sqlVerificar = "SELECT p.Nombre as nombre, p.Precio as precio, c.cantidad as cantidad, p.IdProducto as IdProducto FROM gafitas.carrito as c
inner join productos as p on p.IdProducto = c.IdProducto where c.IdUsuario = $IdUsuario and c.Estado = 'En Carrito' order by p.IdProducto DESC";
$resultadoVerificar = $conexion->query($sqlVerificar);

    if ($resultadoVerificar->num_rows > 0) {    
        $data = array();
        while ($row = mysqli_fetch_assoc($resultadoVerificar)) {
            $data[] = $row;
        }
        $json_data = json_encode($data);
        echo $json_data;
    } else {
        echo "No se encontraron resultados.";
    }
?>