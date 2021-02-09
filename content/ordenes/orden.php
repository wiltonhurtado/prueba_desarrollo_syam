
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
<form action="ordenes/agregarOrden.php" method="post" id="formularioaenviar'">

<!--Arreglar con ajax-->
  <div class="form-group">
    <label for="numero">Número de orden:</label>
    <input type="hidden" class="form-control"  id="num_orden"  value="<?= $cont ?>" name="num_orden">
    <input type="number" class="form-control"  id="num_orden" disabled value="<?= $cont ?>">
  </div>
  <div class="form-group">
    <label for="name" >Nombre:</label>
    <input type="text" class="form-control" placeholder="Escriba el nombre" id="name" required>
  </div>

  <div class="form-group">
    <label for="name">Fecha:</label>
    <input type="datetime"  class="form-control" name="fechahora"  value="<?php echo date("Y/m/d g:i");?>" disabled>
  </div>

  <div class="form-group">
    <label for="name">Articulo:</label>
<select name="articulo" class="form-control" required onchange="mySelect()" id="articulo">
<option value="" selected="true" disabled>Selecciona el articulo</option>
<?php

$sql = 'SELECT * FROM `productos`';
          $r = mysqli_query($conexion, $sql);
          while ($fila = mysqli_fetch_array($r)) {
              ?>
            <option value="<?= $fila['id_producto'] ?>"><?= $fila['descripcion'] ?></option>
              <?php
          }
?>
    
</select>
</div>
<div id="subtotal">
<div class="form-group">
    <label for="cantidad">Cantidad:</label>
    <input type="number" class="form-control"  id="cantidad"  min="1" max="30" value="1" onchange="mySelect2()" name="cantidad">
  </div>

  <div class="form-group"  >
  <label for="Subtotal">Subtotal:</label>
<input type="number" class="form-control"  id="subtotal"  value="0" name="subtotal">
  </div>
  </div>
 
  <button type="submit" class="btn btn-success">Agregar</button>

 
</form>


