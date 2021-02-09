<?php

session_start();
if (!empty($_SESSION['orden'])) {
    foreach ($_SESSION['orden'] as $indice => $pedido) { ?>
   
    <?php
     $num=$pedido['num_orden'];
    }
    ?>
<h5 class="title-detalle">Numero de Orden: <?php echo $num; ?></h5>

<h5 class="title-detalle">Detalle de la orden</h5>
<table class="table">
    <thead>
      <tr class="head-table">
        <th class="th-head">Articulo</th>
        <th class="th-head">Cantidad</th>
        <th class="th-head" >Subtotal</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $subtotal=0;
    
    foreach ($_SESSION['orden'] as $indice => $pedido) { ?>


      <tr>
        <td class="td-list"><?php echo $pedido['descripcion']; ?></td>
        <td class="td-list"><?php echo $pedido['cantidad']; ?></td>
        <td class="td-list">$ <?php echo $pedido['subtotal']; ?></td>
      </tr>
      
<?php
$subtotal=$subtotal+$pedido['subtotal'];

$iva=$subtotal*0.19;
$total=$subtotal+$iva;
    }

    ?>
     <tr>

     <td></td>
    <td></td>
    <td></td>
    <td></td>
     </tr>
   <tr>
    <td></td>
  
        <td class="head-table th-head">Subtotal: </td>
        <td class="td-table">$ <?php echo $subtotal; ?></td>
        </tr>
        <tr>
        <td></td>
     
        <td class="head-table th-head">Total Iva: </td>
        <td class="td-table">$ <?php echo $iva; ?></td>
        </tr>
        <tr>
            <td></td>
         
        <td class="head-table th-head">Total : </td>
        <td class="td-table">$ <?php echo $total; ?></td>
        </tr>  
      </tbody>
  </table>
  <div class="container">

  <table class="table">
   
    <tbody>
  
    
     
    </tbody>
  </table>
  <div class="alert alert-danger" role="alert">
                    <p> <strong>¿Está seguro(a) de querer Finalizar esta orden?</strong>
                    </p>
        </div>
        <form action="ordenes/finalizarCompra.php" method="post">
        <input type="hidden" class="form-control"  id="num_orden"  value="<?= $num ?>" name="num_orden">
        <input type="hidden" class="form-control"  id="subtotal"  value="<?= $subtotal ?>" name="subtotal">
        <input type="hidden" class="form-control"  id="iva"  value="<?= $iva ?>" name="iva">
        <input type="hidden" class="form-control"  id="total"  value="<?= $total ?>" name="total">
  <button class="btn btn-sm btn-success" type="submit"> Si, finalizar</button>
  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">  Cancelar</button>
  </form>
                
</div>
    <?php
}else{
?>
<div class="alert alert-danger" role="alert">
  No se han agregado articulos todavia!
</div>
<?php
}
?>