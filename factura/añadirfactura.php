<?php
include "../conexion.php";
$id=$_GET['id'];
$nombre1= "SELECT * FROM inventario WHERE id=$id";
$nombre=mysqli_query($con,$nombre1);
$nombrec=mysqli_fetch_array($nombre);
$nombreprefac= $nombrec['nombre'];
$cantidad=$_GET['cantidad'];
$precio=$_GET['precio'];
$subtotal=$_GET['sub'];
$cantidador=$nombrec['cantidad'];
$cantnueva=$cantidador-$cantidad;
$insertar = "INSERT INTO `factura` (`nombre`, `cantidad`, `precio`, `subtotal`, `id`) VALUES ('$nombreprefac', '$cantidad', '$precio', '$subtotal', $id)";
$query= mysqli_query($con, $insertar);
$actualizar="UPDATE inventario SET cantidad = '$cantnueva' WHERE id = $id";
$queryinv=mysqli_query($con, $actualizar);
if($query){

  echo "<script>;
   location.href = 'factura.php';
  </script>";

}else{
   echo "<script>
   location.href = 'factura.php';
   </script>";
}

?>