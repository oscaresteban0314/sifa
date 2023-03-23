<?php
include "../conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Factura</title>
		<meta charset="utf-8">
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../js/busquedafactura.js"></script>
        
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
                                <a class="nav-link active" aria-current="page" href="../inventario/inventario.php">Inventario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="factura.php">Facturar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../balance.php">Balance</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
		<header>
			<div class="alert alert-info">
			<h2>Añadir productos</h2>
			</div>
		</header>

		<section>
            <input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>
        <!-- TABLA FACTURA INICIAL-->
            <section id="tabla_resultado">
            <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
            </section>
        <table class="table">
          <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">Precio unitario</th>
                    <th scope="col">precio total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total=0;
                $gananciavalor=0;
                $ganancia_total=0;
                $tabla="SELECT * FROM factura"; 
                $resultado= mysqli_query($con,$tabla); 
                while($row=mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $row["cantidad"]?></td>
                    <td>$<?php echo $row["precio"]?></td>
                    <td>$<?php echo $row["subtotal"]?></td>
                    <?php 
                        $id=$row['id'];
                        $ganancia="SELECT*FROM inventario WHERE id=$id";
                        $ganancia_query=mysqli_query($con,$ganancia);
                        $ganancia_array=mysqli_fetch_array($ganancia_query);
                        $ganancia_valor=$ganancia_array['gananciaXunidad']*$row['cantidad'];
                        
                    ?>
                    <?php echo"<td><a class='btn btn-danger' href='eliminarproducto.php?id=".$row['id']." & nombre=".$row['nombre']."' role='button'>Eliminar producto</a></td>"?>
                    <?php
                        $ganancia_total=$ganancia_valor+$ganancia_total;
                        $total= $row['subtotal']+$total;
                        
                    ?>
                </tr>
                <?php } ?>
                <tr>
                <?php
                if($total<>0){ ?>
                <td>total</td>
                <td>$<?php echo $total;?></td><td></td><td></td><?php
                echo"<td><a class='btn btn-success' href='finalizarcompra.php?ventas=".$total."& ganancias=".$ganancia_total."' role='button'>Finalizar compra</a></td>";
                }
                ?>
                </tr>
                <tr><td><a class="btn btn-danger" href="../index.php" role="button">volver</a></td></tr>
            </tbody>
        </table>
	</body>
    <script src="../js/añadirfactura.js?v=1"></script>
</html>