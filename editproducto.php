<?php
if (!isset($_GET['id'])) {
	header('Location: crudproductos.php');
}

$id=$_GET['id'];
include 'conexion.php';
$sentencia=$bd->prepare("SELECT * FROM productos WHERE id =?;");
$sentencia->execute([$id]);
$prod = $sentencia->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
	<center>
		<h3>Modificar Producto</h3>
		<form method="POST" action="editproducto2.php">
			<table class="table table-bordered">
				<tr>
					<td>Codigo: </td>
					<td><input class="form-control" type="text" name="txt2Codigo" value="<?php echo $prod->codigo; ?>"></td>
				</tr>
				<tr>
					<td>Nombre: </td>
					<td><input class="form-control" type="text" name="txt2Nombre" value="<?php echo $prod->nombre; ?>"></td>
				</tr>
				<tr>
					<td>Descripcion: </td>
					<td><input class="form-control" type="text" name="txt2Descripcion" value="<?php echo $prod->descripcion; ?>"></td>
				</tr>
				<tr>
					<td>Estado: </td>
					<td><input class="form-control" type="text" name="txt2Estado" value="<?php echo $prod->estado; ?>"></td>
				</tr>
				<tr>
					<td>Laboratorio: </td>
					<td><input class="form-control" type="text" name="txt2Laboratorio" value="<?php echo $prod->laboratorio; ?>"></td>
				</tr>
				
				<tr>
					<input type="hidden" name="oculto2">
					<input type="hidden" name="id2"value="<?php echo $prod->id; ?>">
					<td colspan="2"><input class="form-control" type="submit" value="Modificar Producto"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>