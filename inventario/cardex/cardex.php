<?php
    include "../../conexion.php";
    $nombre =$_GET['nombre'];
    $tabla= "SELECT * FROM $nombre ";
    $query=mysqli_query($con,$tabla);
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
    <table class="table">
    <thead>
      <tr>
        <th scope="col">Operacion</th>
        <th scope="col">Cantidad</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_array($query)){
        ?>
      <tr>
        <th scope="row"><?php echo $row["operacion"];?></th>
        <td><?php echo $row["cantidad"]?></td>
        <td>
      </tr>
      <?php } ?>
      <tr><td><a class="btn btn-danger" href="../inventario.php" role="button">volver</a></td></tr>
    </tbody>
    
  </table>
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
    
