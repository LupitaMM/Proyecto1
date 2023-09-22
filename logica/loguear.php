<?php

require 'conexion.php';

$user = $_POST['user'];
$pass = $_POST['pwd'];

if(!$user==""&&!$pass==""){
	$sql = "SELECT user,pass, id from users WHERE user='$user'";
	$result = mysqli_query($conexion, $sql);
	$row = mysqli_num_rows($result);
	if($row>0){
		$array=mysqli_fetch_array($result);
		$ver=password_verify($pass, $array['pass']);
		if($ver){
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['nameuser']=$array['user'];
			$jsonArray = json_encode($array);
			$_SESSION['IdUsuario']=$array['id'];
			header('Location: ../index.php');
		}else{
			echo "<script>
        	alert('Datos incorrectos');
        	window.location= '../login.php'
    		</script>";
		}
	}else{
		echo "<script>
        alert('Datos incorrectos');
       	window.location= '../login.php'
    	</script>";
	}
}else{
	echo "<script>
    alert('Error');
    window.location= '../login.php'
    </script>";
}


?>