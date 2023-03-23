<?
include "../conexion.php";
$tabla_revisada="SELECT*FROM inventario";
$r= mysqli_query($con,$tabla_revisada);
while($row=mysqli_fetch_array($r)){
    if($row['cantidad']<=0){
        $actualizar='DELETE FROM inventario WHERE id='.$row['id'].'';
        $query = mysqli_query($con, $actualizar);
    }
} 
?>