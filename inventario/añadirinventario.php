<?php
include "../conexion.php";
$validate=0;
$password=$_GET['password'];
$nombre;
$nombre=$_GET['nombre'];
$id=$_GET['id'];
$cant=$_GET['cant'];
$cantidador=$_GET['cantor'];
$cantnueva=$cantidador+$cant;
while($row=mysqli_fetch_array($resultadosec)){
    if($row['password']==$password){
        $validate=1;
    }
    else{
        $validate=0;
    }
    ECHO "<script>;
    console.log('".$row['password']." = ".$validate."');
    </script>";
}
    
if ($validate == 1){
    $actualizar="UPDATE inventario SET cantidad = '$cantnueva' WHERE id = $id";
    $tabla="SELECT * FROM inventario WHERE id=$id"; 
    $resultado2= mysqli_query($con,$actualizar);
    if($resultado2){
    
       echo "<script>;
       location.href='inventario.php';
       </script>";
    
    }else{
        echo "<script> ;
        </script>";
    }
}
else{
    echo "<script>;
        alert('CONTRASEÑA INCORRECTA');
       location.href='inventario.php';
       </script>";
}


?>
