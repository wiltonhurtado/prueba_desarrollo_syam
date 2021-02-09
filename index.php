<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=content/">
<?php
    include "php/conexion.php";
$contenido_archivo_json = file_get_contents('info_prueba.json');
//print_r($contenido);
$contenido_archivo_array = json_decode($contenido_archivo_json , true);
//print_r($contenido_arr);
$cont=0;
foreach ($contenido_archivo_array  as $valor => $valores) {
    $cont++;
    $id=$cont;
    $descripcion=$valores['descripcion'];
    $precio=$valores['precio'];
    $existencia=$valores['existencia'];
    echo $id;
    $sql= 'INSERT INTO `productos` (`id_producto`, `descripcion`, `precio`, `existencia`) VALUES ('.$id.', "'.$descripcion.'", '.$precio.', '.$existencia.')';
    $rec = mysqli_query($conexion, $sql);
   
}
?>