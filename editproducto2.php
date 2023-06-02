<?php
	if (!isset($_POST['oculto2'])) {
	header('Location: crudproductos.php');
}
include 'conexion.php';
$id2=$_POST['id2'];
$codigo2 = $_POST['txt2Codigo'];
 $nombre2 = $_POST['txt2Nombre'];
 $descripcion2 = $_POST['txt2Descripcion'];
 $estado2 = $_POST['txt2Estado'];
 $laboratorio2 = $_POST['txt2Laboratorio'];
 

 $sentencia = $bd->prepare("UPDATE productos SET codigo = ?,nombre = ?,descripcion = ?,estado = ?,laboratorio = ? WHERE id = ?;");
 $resultado = $sentencia->execute([ $codigo2,$nombre2,$descripcion2,$estado2, $laboratorio2,$id2]);
if ($resultado === True) {
 	header('Location: crudproductos.php');
 }else {
 	echo "Hubo un problema, datos no actualizados";
 }
?>