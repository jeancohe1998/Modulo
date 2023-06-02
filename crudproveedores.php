<?php
include 'conexion.php';
$sentencia = $bd->query("SELECT * FROM proveedores");
$proveedor=$sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Proveedores</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<center>
		<h3>Lista de Proveedores</h3>
		<table  class="table table-bordered">
			<tr>
				<td>ID</td>
				<td>Tipo de Identificacion</td>
				<td>Numero de Identificacion</td>
				<td>Nombre o Razon Social</td>
				<td>Direccion</td>
				<td>Nombre de Contacto</td>
				<td>Celular de Contacto </td>
				<td>Modificar </td>
				<td>Borrar </td>
			</tr>
			<?php
				foreach ($proveedor as $pv) {
				?>
			<tr>
				<td><?php echo $pv->id;?></td>
				<td><?php echo $pv->tid;?></td>
				<td><?php echo $pv->nid;?></td>
				<td><?php echo $pv->nors;?></td>
				<td><?php echo $pv->dr;?></td>
				<td><?php echo $pv->ndc;?></td>
				<td><?php echo $pv->cdc;?> </td>
				<td><a class="btn btn-warning" href="editproveedor.php?id=<?php echo $pv->id;?>">Modificar<i class="fa fa-edit"></i></a> </td>
				<td><a class="btn btn-danger" href="deleteproveedor.php?id=<?php echo $pv->id;?>">Borrar</a><i class="fa fa-trash"></i> </td>
			</tr>
				<?php
				}
			 ?>
		</table>

		<h3>Ingresar Proveedor</h3>
		<form method="POST" action="createproveedor.php">
			<table>
				<tr>
					<td>Tipo de Identificacion: </td>
					<td><input class="form-control" type="text" name="txtTid"></td>
				</tr>
				<tr>
					<td>Numero de Identificacion: </td>
					<td><input class="form-control" type="text" name="txtNid"></td>
				</tr>
				<tr>
					<td>Nombre o Razon Social: </td>
					<td><input class="form-control" type="text" name="txtNos"></td>
				</tr>
				<tr>
					<td>Direccion: </td>
					<td><input class="form-control" type="text" name="txtDr"></td>
				</tr>
				<tr>
					<td>Nombre de Contacto: </td>
					<td><input class="form-control" type="text" name="txtNdc"></td>
				</tr>
				<tr>
					<td>Celular de Contacto: </td>
					<td><input class="form-control" type="text" name="txtCdc"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input class="form-control" type="reset" name=""> </td>
					<td><input class="form-control" type="submit" value="Ingresar Proveedor"></td>
				</tr>

			
			</table>
			<br>
			<a href="index.php"><button type="button" class="btn btn-info">Regresar A Pagina Principal</button></a>
		</form>
	</center>
</body>
</html>