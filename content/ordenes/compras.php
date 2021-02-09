<?php
 include "../../php/conexion.php";
 $sql = 'SELECT * FROM `ordenes`';
          $r = mysqli_query($conexion, $sql);
          $cont=0;
          while ($fila = mysqli_fetch_array($r)) {
              $cont++;
          }
          if($cont==0){
              ?>
              <br>
            <br>
              <div class="alert alert-danger" role="alert">
  No hay compras realizadas en el momento!
</div>
              <?php
            
          }else{

            $sql = 'SELECT * FROM `ordenes`';
            $r = mysqli_query($conexion, $sql);
            $cont=0;
            ?>
            <br>
            <br>
<table class="table">
    <thead>
      <tr class="head-table">
        <th class="th-head">N° Orden</th>
        <th class="th-head">Subtotal</th>
        <th class="th-head" >Iva</th>
        <th class="th-head" >Total</th>
      </tr>
    </thead>
    <tbody>
            <?php
            while ($fila = mysqli_fetch_array($r)) {
                ?>
                <tr>
                <td class="td-list"><?php echo $fila['numOrden']; ?></td>
                <td class="td-list">$ <?php echo $fila['subtotal']; ?></td>
                <td class="td-list">$ <?php echo $fila['totaliva']; ?></td>
                <td class="td-list">$ <?php echo $fila['totalorden']; ?></td>
              </tr>
              <?php
            }
            
          }
?>