
<?php
 include "../../php/conexion.php";
$pro= $_POST['pro'];
$cant = $_POST['cant'];

if($pro!=""){
    $sql = 'SELECT * FROM `productos` where `id_producto`='.$pro.'';
    $r = mysqli_query($conexion, $sql);
    while ($fila = mysqli_fetch_array($r)) {
        $precio=$fila['precio'];
        $existencia=$fila['existencia'];
    }
    $sutotal=$precio*$cant;
}
else{
$subtotal=0;
}

?>


<div class="form-group">
    <label for="cantidad">Cantidad:</label>
    <input type="number" class="form-control"  id="cantidad"  min="1" max="<?= $existencia?>" value="<?= $cant?>" onchange="mySelect2()" name="cantidad">
  </div>

  <div class="form-group"  >
  <label for="Subtotal">Subtotal:</label>
<input type="number" class="form-control"  id="subtotal" value="<?= $sutotal ?>" name="subtotal" >
  </div>