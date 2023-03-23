<?php
    include "conexion.php";
    $password = $_GET['password'];
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
    if ($validate==0){
        echo "<script>;
        alert('CONTRASEÑA INCORRECTA');
       location.href='balance.php';
       </script>";
    }
   
    $ventas= $_GET['ventas'];
    $ganancias=$_GET['ganancias'];
    $actualizar="UPDATE balance SET  ventas='0', ganancias='0' WHERE id = 1";
    $query= mysqli_query($con,$actualizar);
    if($query){
        echo "<script>
         location.href = 'balance.php';
        </script>";
     
     }else{
         echo "<script> ;
         alert('incorrecto');
         location.href = 'balance.php';
         </script>";
     }
?>  