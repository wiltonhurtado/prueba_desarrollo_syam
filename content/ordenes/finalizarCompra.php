<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../">
<?php
 include "../../php/conexion.php";
 session_start();
 session_destroy();

 $num_orden=$_POST['num_orden'];
 $subtotal=$_POST['subtotal'];
 $iva=$_POST['iva'];
 $total=$_POST['total'];

 $sql= 'INSERT INTO `ordenes` (`numOrden`, `subtotal`, `totaliva`, `totalorden`) VALUES ('.$num_orden.', '.$subtotal.', '.$iva.', '.$total.')';
 $rec = mysqli_query($conexion, $sql);

 
 ?>