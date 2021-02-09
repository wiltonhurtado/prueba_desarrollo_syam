
<?php

session_start();
include "../../php/conexion.php";
$producto = $_POST['producto'];
    //echo $producto;
    settype($producto, 'int');
    foreach ($_SESSION['orden'] as $indice => $pedido) {
        if ($pedido['articulo'] == $producto) {
            unset($_SESSION['orden'][$indice]);
        }
    }

    if (!empty($_SESSION['orden'])) {
        ?>
    
<table class="table">
    <thead>
      <tr class="head-table">
        <th class="th-head">Articulo</th>
        <th class="th-head">Cantidad</th>
        <th class="th-head" >Subtotal</th>
        <th class="th-head">Borrar Item</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $subtotal=0;
    
    foreach ($_SESSION['orden'] as $indice => $pedido) { ?>


      <tr>
        <td class="td-list"><?php echo $pedido['descripcion']; ?></td>
        <td class="td-list"><?php echo $pedido['cantidad']; ?></td>
        <td class="td-list"><?php echo $pedido['subtotal']; ?></td>
        <td class="td-list"> <?php  echo "<button class='btn-eliminr-producto' onclick='eliminarform(" . $pedido['articulo'] . ")'>x</button>";
                                        ?></td>
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
        <td class="td-table"><?php echo $subtotal; ?></td>
        </tr>
        <tr>
        <td></td>
     
        <td class="head-table th-head">Total Iva: </td>
        <td class="td-table"><?php echo $iva; ?></td>
        </tr>
        <tr>
            <td></td>
         
        <td class="head-table th-head">Total : </td>
        <td class="td-table"><?php echo $total; ?></td>
        </tr>  
      </tbody>
  </table>
  <div class="container">

  <table class="table">
   
    <tbody>
  
    
     
    </tbody>
  </table>

</div>
        <?php
    }else{
    ?>
    <div class="alert alert-danger" role="alert">
      Ha eliminado todos los articulo por favor agregue un articulo!
    </div>
    <?php
    }
    ?>