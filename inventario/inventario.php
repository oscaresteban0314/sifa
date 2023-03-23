<?php
include "../conexion.php";

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
      <!-- barra de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="inventario.php">Inventario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../factura/factura.php">Facturar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../balance.php">Balance</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      <!-- imprimir inventario -->
        <form method="POST" name="form-work" action="">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Inventario</th>
                <th scope="col">Precio venta</th>
                <th scope="col">Costo caja</th>
                <th scope="col">Cantidad caja</th>
                <th scope="col">Costo unidad</th>
                <th scope="col">Ganancia</th>
                <th socope="col">Operacion</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $tabla="SELECT * FROM inventario  ORDER BY nombre ASC"; 
                $resultado= mysqli_query($con,$tabla); 
                while($row=mysqli_fetch_array($resultado)){
                ?>
              <tr>
                <th scope="row"><?php echo $row["id"];?></th>
                <td><?php echo $row["nombre"]?></td>
                <td>
                <?php echo $row["cantidad"]?>
                </td>
                <td>$<?php echo $row["precio_venta"]?></td>
                <td>$<?php echo $row["costo_caja"]?></td>
                <td><?php echo $row["cantidad_caja"]?></td>
                <td>$<?php echo $row["costo_unidad"]?></td>
                <td>$<?php echo $row["gananciaXunidad"]?></td>
                <td>
                <input class="btn btn-success" type="button" value="+" onclick="actualizar(<?php echo $row['id'];?>,<?php echo $row['cantidad'];?>,'<?php echo $row['nombre'];?>')">
                  <a class="btn btn-success" onclick="act_data(<?php echo $row['id'];?>)" role="button">actualizar</a>
                  <a class="btn btn-danger" onclick="eliminar(<?php echo $row['id'];?>,'<?php echo $row['nombre'];?>')" role="button">eliminar</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </form>
      <!-- descargar inventario -->
        <a class="btn btn-outline-success" href="descargarinventario.php" role="button">descargar</a>
        <hr>
      <!-- añadir productos -->
        <form  method="POST" name="form-work" action="guardarinventario.php">
            <div class="input-group mb-3 col-md-5">
                <span class="input-group-text" id="basic-addon1">Nombre</span>
                <input type="text" class="form-control " placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="nombre" require>
            </div>
            <div class="input-group mb-3 col-md-5">
                <span class="input-group-text" id="basic-addon1">Cantidad de cajas</span>
                <input type="number" class="form-control " placeholder="cantidad de cajas" aria-label="Username" aria-describedby="basic-addon1" name="cantidad" require>
            </div>
            <div class="input-group mb-3 col-md-5">
                <span class="input-group-text" id="basic-addon1">Cantidad de unidades por caja</span>
                <input type="number" class="form-control " placeholder="cantidad de unidades X caja" aria-label="Username" aria-describedby="basic-addon1" name="cantidad_caja" require>
            </div>
            <div class="input-group mb-3 col-md-5">
                <span class="input-group-text" id="basic-addon1">Costo caja</span>
                <input type="number" class="form-control " placeholder="Costo de la caja" aria-label="Username" aria-describedby="basic-addon1" name="costo_caja"require>
            </div>
            
            <div class="input-group mb-3 col-md-5">
                <span class="input-group-text" id="basic-addon1">Precio</span>
                <input type="number" class="form-control col-md-5" placeholder="Precio a vender X unidad" aria-label="Username" aria-describedby="basic-addon1" name="precio_venta"require>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                    <a class="btn btn-danger" href="../index.php" role="button">volver</a>
                </div>
            </div>
        </form>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="../js/inventario.js?v=3.2"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
    </body>

  </html>