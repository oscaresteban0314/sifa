<?php 
    include "conexion.php";
?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>TITULO</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./inventario/inventario.php">Inventario</a>   
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="./factura/factura.php">Facturar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="balance.php">Balance</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ventas</th>
                <th scope="col">Ganancias</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $total=0;
                $gananciavalor=0;
                $ganancia_total=0;
                $tabla="SELECT * FROM balance"; 
                $resultado= mysqli_query($con,$tabla); 
                while($row=mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $row["ventas"]?></td>
                <td><?php echo $row["ganancias"];
                $ventas=$row['ventas'];
                $ganancias=$row['ganancias'];
                ?></td>

            </tr>
            <?php } ?>
            <tr><td><a class="btn btn-success"  onclick="balance(<?php echo $ventas?>, <?php echo $ganancias?>)" role="button">Reiniciar balance</a></td>
            <td><a class="btn btn-danger" href="index.php" role="button">volver</a></td></tr>

        </tbody>
    </table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="./js/balance.js"></script>
</body>

</html>