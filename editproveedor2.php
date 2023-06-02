<?php
	if (!isset($_POST['oculto'])) {
	header('Location: crudproveedores.php');
}
include 'conexion.php';
$id2=$_POST['id2'];
$tipodeid2 = $_POST['txt2Tid'];
 $numid2 = $_POST['txt2Nid'];
 $Nos2 = $_POST['txt2Nos'];
 $Dr2 = $_POST['txt2Dr'];
 $Ndc2 = $_POST['txt2Ndc'];
 $Cdc2 = $_POST['txt2Cdc'];

 $sentencia = $bd->prepare("UPDATE proveedores SET tid = ?,nid = ?,nors = ?,dr = ?,ndc = ?,cdc = ? WHERE id = ?;");
 $resultado = $sentencia->execute([ $tipodeid2,$numid2,$Nos2,$Dr2, $Ndc2,$Cdc2,$id2]);
if ($resultado === True) {
 	header('Location: crudproveedores.php');
 }else {
 	echo "Hubo un problema, datos no actualizados";
 }
?>