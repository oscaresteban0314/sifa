<?php
    include '../conexion.php';
    $tabla= 'SELECT * FROM inventario';
    $query=mysqli_query($con,$tabla);
    $docu="inventario.xls";
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=".$docu);
    header("Pragma: no-cache");
    header("Expires: 0");
    echo "
        <table border =1>
            <tr>
                <th colspan=7>Inventario</th>
            </tr>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Inventario</th>
            <th>Precio venta</th>
            <th>Costo caja</th>
            <th>Costo Unidad</th>
            <th>Ganancia</th>
            </tr>
    ";
    while ($row= mysqli_fetch_array($query)) {
        echo "
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['cantidad']."</td>
                <td>".$row['precio_venta']."</td>
                <td>".$row['costo_caja']."</td>
                <td>".$row['costo_unidad']."</td>
                <td>".$row['gananciaXunidad']."</td>
            </tr>
        ";
    }
    echo "
        </table>
        <script>
            location.href = 'inventraio.php';
        </script>
    ";

?>