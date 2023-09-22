<?php
require_once 'conexion.php';
$sql = "SELECT * FROM Productos";
$resultado = mysqli_query($conexion, $sql);
$productos = array();

while ($mostrar = mysqli_fetch_array($resultado)) {
  $productos[] = array(
    'IdProducto' => $mostrar['IdProducto'],
    'Nombre' => $mostrar['Nombre'],
    'Precio' => $mostrar['Precio'],
    'Marca' => $mostrar['Marca'],
    'Imagen' => $mostrar['Imagen']
  );
}

// Devolver los datos en formato JSON
header('Content-Type: application/json');
echo json_encode($productos);

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

