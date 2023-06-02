<?php
if (!isset($_POST['oculto2'])) {
 	exit();
 } 

 include 'conexion.php';
 $codigo = $_POST['txtCodigo'];
 $nombre = $_POST['txtNombre'];
 $descripcion = $_POST['txtDescripcion'];
 $estado = $_POST['txtEstado'];
 $laboratorio = $_POST['txtLaboratorio'];
 

 $sentencia = $bd->prepare("INSERT INTO productos(codigo,nombre,descripcion,estado,laboratorio) VALUES(?,?,?,?,?);");
 $resultado = $sentencia->execute([ $codigo,$nombre,$descripcion,$estado, $laboratorio]);

 if ($resultado === True) {
 	header('Location: crudproductos.php');
 }else {
 	echo "Hubo un problema, datos no insertados";
 }
?>