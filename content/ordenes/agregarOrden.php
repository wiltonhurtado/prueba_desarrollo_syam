<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=../compras.html">
<?php

session_start();
include "../../php/conexion.php";
$articulo=$_POST['articulo'];

$cantidad=$_POST['cantidad'];
$numero_orden=$_POST['num_orden'];
echo $numero_orden;
$sql= 'SELECT * FROM `productos` WHERE `id_producto`='.$articulo.'';
$rec = mysqli_query($conexion, $sql);
while ($fila = mysqli_fetch_array($rec)) {

    $descripcion=$fila['descripcion'];
}
$subtotal=$_POST['subtotal'];
if (!isset($_SESSION['orden'])) {
    $pedido = array(
        "num_orden" => $numero_orden,
        "articulo" => $articulo,
        "descripcion" => $descripcion,
        "cantidad" => $cantidad,
        "subtotal"  => $subtotal,  
    );
    $_SESSION['orden'][0] = $pedido;
} else {
$cont=0;
    foreach ($_SESSION['orden'] as $indice => $pedido) { 
        if($pedido['articulo']==$articulo){
         $cont++;
        }
    }
    if($cont==0){
    $numeroProducto = count($_SESSION['orden']);
    $pedido = array(
        "num_orden" => $numero_orden,
        "articulo" => $articulo,
        "descripcion" => $descripcion,
        "cantidad" => $cantidad,
        "subtotal"  => $subtotal,
    );
    $_SESSION['orden'][$numeroProducto] = $pedido;
  }else{
      ?>

      <?php
  }
}
?>

<?php
 include "../../php/conexion.php";
 $sql = 'SELECT * FROM `ordenes`';
          $r = mysqli_query($conexion, $sql);
          $cont=0;
          while ($fila = mysqli_fetch_array($r)) {
              $cont++;
          }
          if($cont==0){
              $cont=1;
          }else{
              $cont=$cont+1;
          }
?>