<?php
include 'conexion.php';
$sentencia = $bd->query("SELECT * FROM productos");
$producto=$sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<center>
		<h3>Lista de Productos</h3>
		<table class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Codigo</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Estado</td>
				<td>Laboratorio</td>
				<td>Modificar </td>
				<td>Borrar </td>
			</tr>
			<?php
				foreach ($producto as $pr) {
				?>
			<tr>
				<td><?php echo $pr->id;?></td>
				<td><?php echo $pr->codigo;?></td>
				<td><?php echo $pr->nombre;?></td>
				<td><?php echo $pr->descripcion;?></td>
				<td><?php echo $pr->estado;?></td>
				<td><?php echo $pr->laboratorio;?></td>
				<td><a class="btn btn-warning" href="editproducto.php?id=<?php echo $pr->id;?>">Modificar</a><i class="fa fa-edit"></i> </td>
				<td><a class="btn btn-danger" href="deleteproducto.php?id=<?php echo $pr->id;?>">Borrar</a> <i class="fa fa-trash"></td>
			</tr>
				<?php
				}
			 ?>
		</table>

		<h3>Ingresar Producto</h3>
		<form method="POST" action="createproducto.php">
			<table>
				<tr>
					<td>Codigo: </td>
					<td><input class="form-control" type="text" name="txtCodigo"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input class="form-control" type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Descripcion: </td>
					<td><input class="form-control" type="text" name="txtDescripcion"></td>
				</tr>
				<tr>
					<td>Estado: </td>
					<td><input class="form-control" type="text" name="txtEstado"></td>
				</tr>
				<tr>
					<td>Laboratorio: </td>
					<td><input class="form-control" type="text" name="txtLaboratorio"></td>
				</tr>
				
				<input class="form-control" type="hidden" name="oculto2" value="1">
				<tr>
					<td><input class="form-control" type="reset" name="" > </td>
					<td><input class="form-control" type="submit" value="Ingresar Producto"></td>
				</tr>
			</table>
			<br>
			<a href="index.php"><button type="button" class="btn btn-info">Regresar A Pagina Principal</button></a>
		</form>
	</center>
</body>
</html>