<?php
 require '../conexion.php';
 $id=$_POST['id'];
 $cantor=$_POST['cantor'];
 $cantidad  = $_POST['cantidad'];
 $precio_venta = $_POST['precio_venta'];
 $costo_caja= $_POST['costo_caja'];
 $cantidad_caja=$_POST['cantidad_caja'];
 $costo_unidad=$_POST['costo_caja']/$_POST['cantidad_caja'];
 $ganancia=$precio_venta-$costo_unidad;
 $nombre=$_POST['nombre'];
 $actualizar="UPDATE inventario SET nombre ='$nombre',cantidad = '$cantidad', precio_venta='$precio_venta', costo_caja='$costo_caja', cantidad_caja='$cantidad_caja',costo_unidad='$costo_unidad', gananciaXunidad='$ganancia' WHERE id = $id";
$query = mysqli_query($con, $actualizar);
if($query){

   echo "<script>;
    location.href = 'inventario.php';
   </script>";

}else{
    echo "<script> ;
    </script>";
}






?>