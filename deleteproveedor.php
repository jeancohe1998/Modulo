<?php
if (!isset($_GET['id'])) {
 	exit();
 } 
 $code = $_GET['id'];
 include "conexion.php";
 $sentencia=$bd->prepare("DELETE FROM proveedores WHERE id=?;");
 $resultado=$sentencia->execute([$code]);
 if ($resultado === True) {
 	header('Location: crudproveedores.php');
 }else {
 	echo "Hubo un problema, datos no eliminados";
 }
?>