<?php
  $connect = new mysqli("localhost", "root", "", "gafitas") or die('Error al conectar'. mysqli_errno($connect));
?>
<!DOCTYPE html>
<html>
<body>
  <table>
  <?php

  $sql = "SELECT Nombre From Productos where IdProducto='ADQUFLF'";
  $result = mysqli_query($connect,$sql);
  
  while($mostrar=mysqli_fetch_array($result)){
  ?>
  <tr>
  	<td><?php echo $mostrar['Nombre'] ?></td>
  </tr>
  <?php 
	 }
  ?>
  </table>

  <table>
  <?php

  $sql2 = "SELECT Descripcion From Productos where IdProducto='ADQUFLF'";
  $result2 = mysqli_query($connect,$sql2);
  
  while($mostrar2=mysqli_fetch_array($result2)){
  ?>
  <tr>
  	<td><?php echo $mostrar2['Descripcion'] ?></td>
  </tr>
  <?php 
	 }
  ?>
  </table>
</body>
</html>