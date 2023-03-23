<?php
    require '../conexion.php';
    $id=$_GET['id'];
    $nombre= $_GET['nombre'];
    $password= $_GET['password'];
    $actualizar="DELETE FROM inventario WHERE id = $id ";
    $queryt="DROP TABLE $nombre";
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
    if ($validate==1){
        $query = mysqli_query($con, $actualizar);

        if($query){
    
        echo "<script>;
            location.href = 'inventario.php';
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
   // $querytu= mysqli_query($con,$queryt);
    
?>