<?php

require 'conexion.php';

//$user = $_POST['user'];
//$pass = $_POST['pwd'];
//$email = $_POST['email'];

$sql = "SELECT * FROM users";
$rec = mysqli_query($conexion,$sql);
$ver = 0;

while($resultado = mysqli_fetch_object($rec)){
	if($resultado->user == $_POST['user']){
		$ver = 1;
	}
}
if($ver == 0){

	$user = $_POST['user'];
	$pass = $_POST['pwd'];
	$email = $_POST['email'];

	$pass_cif = password_hash($pass, PASSWORD_DEFAULT, array("cost" => 12));


	$iv = random_bytes(16);
    $datosEncriptados = openssl_encrypt($pass, 'AES-256-CBC', "hola_buen_dia", OPENSSL_RAW_DATA, $iv);
    $encrypted = base64_encode($iv . $datosEncriptados);

	$conexion -> query("INSERT INTO users (user,pass,email,safePass) 
		values ('$user','$pass_cif','$email','$encrypted')");
	mysqli_query($conexion,$sql);

	echo "<script>
        alert('Registrado correctamente');
        window.location= '../login.php'
    </script>";
}
else{
	echo "<script>
        alert('Nombre de usuario ya registrado en la base de datos, por favor intente otro.');
        window.location= '../register.php'
    </script>";
}



?>