<?php

require 'conexion.php';

$suma = 0;
if(isset($_GET['precio'])){
    $_SESSION['producto'][$_SESSION['contador']] = $_GET['precio'];
    $_SESSION['contador']++;
}

echo '<table class="table table-bordered">';
for($i = 0;$i< $_SESSION['contador'];$i++){
    $consulta = "select * from producto where IdProducto='".$_SESSION['producto'][$i]."'";
    while($fila = mysqli_fetch_array($consulta)) {
            echo "<tr><td>".$fila['Nombre']."</td><td> ".$fila['Precio']."</td></tr>";
    $suma += $fila['Precio'];
    }
}
echo "<tr><td>Subtotal</td><td>$".number_format($suma,2)."</td></tr>";
echo "</table>";
$_SESSION['sumaTotal']=$suma;