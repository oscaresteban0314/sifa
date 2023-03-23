<?php 
include "../conexion.php"; 
include "../inventario/revisioninventario.php";
//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM inventario ORDER BY id";
///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['alumnos']))
{
	$q=$con->real_escape_string($_POST['alumnos']);
	$query="SELECT * FROM inventario WHERE nombre lIKE '%".$q."%'";
}
$buscarAlumnos=mysqli_query($con,$query);
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Stock</th>
        <th scope="col">Precio</th>
		</tr>';
    if ($buscarAlumnos->num_rows > 0)
    {
	while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaAlumnos['id'].'</td>
			<td>'.$filaAlumnos['nombre'].'</td>
			<td>'.$filaAlumnos['cantidad'].'</td>
			<td>'.$filaAlumnos['precio_venta'].'</td>
            <td><input class="btn btn-success" type="button" value="+" onclick="actualizar('.$filaAlumnos['precio_venta'].','.$filaAlumnos['id'].','.$filaAlumnos['cantidad'].')"></td>
            </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
