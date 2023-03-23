<?php
include "../conexion.php";

?>
<?php
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
     location.href='inventario.php';
     </script>";
    
        }
    
  ?>
<!doctype html>

<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Inventario</title>
</head>

<body>
<form method="POST" name="form-work" action="guardaractualizacioninventario.php">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Inventario</th>
      <th scope="col">Precio venta</th>
      <th scope="col">Costo caja</th>
      <th scope="col">Cantidad caja</th>
      <th scope="col">Costo unidad</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $id=$_GET['id'];
      $tabla="SELECT * FROM inventario WHERE id=$id"; 
      $resultado= mysqli_query($con,$tabla); 

      while($row=mysqli_fetch_array($resultado)){
      ?>
    <tr>
      <th scope="row" hidden><input type="number" name="id" value="<?php echo $row['id']?>"></th>
      <td><input type="text" name="nombre" value="<?php echo $row['nombre']?>"></td>
      <input type="number" name="cantor" value="<?php echo $row['cantidad']?>" hidden >
      <td>
      <input type="number" name="cantidad" value="<?php echo $row['cantidad']?>">
      </td>
      <td>$<input type="number" name="precio_venta" value="<?php echo $row['precio_venta']?>"></td>
      <td>$<input type="number" name="costo_caja" value="<?php echo $row['costo_caja']?>"></td>
      <td><input type="number"  name ="cantidad_caja"value="<?php echo $row['cantidad_caja']?>"></td>
      <td> <button type="submit" class="btn btn-success">actualizar</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</form>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../js/inventario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>