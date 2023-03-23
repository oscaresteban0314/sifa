<?php
 require '../conexion.php';
 $nombre  = $_POST['nombre'];
 $cantidad  = $_POST['cantidad_caja']*$_POST['cantidad'];
 $precio_venta = $_POST['precio_venta'];
 $costo_caja= $_POST['costo_caja'];
 $cantidad_caja=$_POST['cantidad_caja'];
 $costo_unidad=$_POST['costo_caja']/$_POST['cantidad_caja'];
 $ganancia=$precio_venta-$costo_unidad;
 $insertar = "INSERT INTO `inventario` (`id`, `nombre`, `cantidad`, `precio_venta`, `costo_caja`, `cantidad_caja`, `costo_unidad`,`gananciaXunidad`) VALUES (NULL, '$nombre', '$cantidad', '$precio_venta', '$costo_caja', '$cantidad_caja', '$costo_unidad','$ganancia')";
 $query = mysqli_query($con,$insertar);
if($query){

   echo "<script>;
    location.href = 'inventario.php';
   </script>";

}else{
    echo "<script> ;
    </script>";
}






?>