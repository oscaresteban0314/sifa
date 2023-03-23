<?php
include "../conexion.php";
$tabla_balance="SELECT*FROM balance";
$tabla_balance_query= mysqli_query($con,$tabla_balance);
$tabla_balance_array=mysqli_fetch_array($tabla_balance_query);
$ventasor=$tabla_balance_array['ventas'];
$gananciasor=$tabla_balance_array['ganancias'];
$ventas=$_GET['ventas'];
$ganancias=$_GET['ganancias'];
$ventast=$ventas+$ventasor;
$gananciast=$ganancias+$gananciasor;
$actualizar="UPDATE balance SET  ventas='$ventast', ganancias='$gananciast' WHERE id = 1";
$querya= mysqli_query($con,$actualizar);
$resetfactura="DELETE FROM factura";
$queryb= mysqli_query($con,$resetfactura);
if($querya && $queryb){

    echo "<script>;
     location.href = 'factura.php';
    </script>";
 
 }else{
     echo "<script> ;
     </script>";
 } 
?>