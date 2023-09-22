<?php
    include_once 'conexion.php';
    $sql = "SELECT 
            p.IdProducto as IdProducto,
            p.Nombre as Nombre,
            p.Marca as Marca,
            p.Descripcion as Descripcion,
            p.Imagen as Imagen,
            SUM(c.Cantidad) as TotalVentas
        FROM
            gafitas.productos as p
        LEFT JOIN
            carrito as c ON p.IdProducto = c.IdProducto AND c.Estado = 'Pagado'
        GROUP BY
            p.IdProducto
        ORDER BY
            TotalVentas;";
    $resultado = mysqli_query($conexion, $sql);
    $productos = array();

    while ($mostrar = mysqli_fetch_array($resultado)) {
        $productos[] = array(
            'IdProducto' => $mostrar['IdProducto'],
            'Nombre' => $mostrar['Nombre'],
            'Marca' => $mostrar['Marca'],
            'Descripcion' => $mostrar['Descripcion'],
            'Imagen' => $mostrar['Imagen'],
            'TotalVentas' => $mostrar['TotalVentas'] // Corregir el acceso a la columna "TotalVentas"
        );
    }

    // Devolver los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode($productos);

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
?>