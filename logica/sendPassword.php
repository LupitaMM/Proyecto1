<?php
    require_once "conexion.php";

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

if (isset($_POST['correo'])) {
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);

    $consulta = "SELECT pass, safePass FROM users WHERE email = '$correo'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) === 1) {
        $fila = mysqli_fetch_assoc($resultado);
        
        $datosDecodificados = base64_decode($fila['safePass']);

        $iv = substr($datosDecodificados, 0, 16);

        $datosDesencriptados = openssl_decrypt(substr($datosDecodificados, 16), 'AES-256-CBC', "hola_buen_dia", OPENSSL_RAW_DATA, $iv);

        $contrasena = $fila['pass'];

        $mensaje = "Su contraseña es: " . $datosDesencriptados;
        $asunto = "Recuperación de contraseña";
        $headers = "From: soporte@gafitas.com" . "\r\n";

        mail($correo, $asunto, $mensaje, $headers);

        echo "<script>
        alert('Se ha enviado un correo con la contraseña a su dirección de correo electrónico.');
        window.location= '../login.php'
        </script>";
        echo  "";
    } else {
        echo "<script>
        alert('El correo electrónico proporcionado no está registrado en nuestra base de datos.');
        window.location= '../login.php'
        </script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
}
?>