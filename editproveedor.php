<?php
if (!isset($_GET['id'])) {
	header('Location: crudproveedores.php');
}

$id=$_GET['id'];
include 'conexion.php';
$sentencia=$bd->prepare("SELECT * FROM proveedores WHERE id =?;");
$sentencia->execute([$id]);
$pr = $sentencia->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar Proveedor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<center>
		<h3>Modificar Proveedor</h3>
		<form method="POST" action="editproveedor2.php">
			<table class="table table-bordered">
				<tr>
					<td>Tipo de Identificacion: </td>
					<td><input class="form-control" type="text" name="txt2Tid" value="<?php echo $pr->tid; ?>"></td>
				</tr>
				<tr>
					<td>Numero de Identificacion: </td>
					<td><input class="form-control" type="text" name="txt2Nid" value="<?php echo $pr->nid; ?>"></td>
				</tr>
				<tr>
					<td>Nombre o Razon Social: </td>
					<td><input class="form-control" type="text" name="txt2Nos" value="<?php echo $pr->nors; ?>"></td>
				</tr>
				<tr>
					<td>Direccion: </td>
					<td><input class="form-control" type="text" name="txt2Dr" value="<?php echo $pr->dr; ?>"></td>
				</tr>
				<tr>
					<td>Nombre de Contacto: </td>
					<td><input class="form-control" type="text" name="txt2Ndc" value="<?php echo $pr->ndc; ?>"></td>
				</tr>
				<tr>
					<td>Celular de Contacto: </td>
					<td><input class="form-control" type="text" name="txt2Cdc" value="<?php echo $pr->cdc; ?>"></td>
				</tr>
				<tr>
					<input class="form-control" type="hidden" name="oculto">
					<input class="form-control" type="hidden" name="id2"value="<?php echo $pr->id; ?>">
					<td colspan="2"><input class="form-control" type="submit" value="Modificar Proveedor"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>