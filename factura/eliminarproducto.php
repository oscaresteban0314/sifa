<?php
 require '../conexion.php';
 $id=$_GET['id'];
 $nombre=$_GET['nombre'];
 $añadir_cantor="SELECT * FROM inventario where id=$id";
 $añadir_query_or= mysqli_query($con,$añadir_cantor);
 $añadircant_array_or= mysqli_fetch_array($añadir_query_or);
 $añadir_or=$añadircant_array_or['cantidad'];
 $añadir_cant="SELECT * FROM factura where id=$id";
 $añadir_query= mysqli_query($con,$añadir_cant);
 $añadircant_array= mysqli_fetch_array($añadir_query);
 $añadir=$añadircant_array['cantidad'];
 $añadircardex=$añadircant_array['cantidad']*-1;
 $cantnueva= $añadir_or+$añadir;
 $actualizar_añadir= "UPDATE inventario SET cantidad = '$cantnueva' WHERE id = $id";
 $actualizar_añadir_query= mysqli_query($con,$actualizar_añadir);
 $actualizar="DELETE FROM factura WHERE id=$id";
 $update="DELETE FROM  $nombre WHERE cantidad=$añadircardex";
 $updatej= mysqli_query($con,$update);
 $query = mysqli_query($con, $actualizar);
 if($actualizar_añadir_query && $query){

   echo "<script>;
    location.href = 'factura.php';
   </script>";

}else{
    echo "<script> ;
    </script>";
} 






?>