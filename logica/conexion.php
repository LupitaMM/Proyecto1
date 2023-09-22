<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "gafitas";

/* Direccion del servidor en la nube

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "threedarkshoes";

*/

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

/*
if($conexion){
	echo "Conectado correctamente";
}else{
	echo "Error en la conexion";
}
*/

?>