<?php
if (!isset($_GET['id'])) {
 	exit();
 } 
 $code = $_GET['id'];
 include "conexion.php";
 $sentencia=$bd->prepare("DELETE FROM productos WHERE id=?;");
 $resultado=$sentencia->execute([$code]);
 if ($resultado === True) {
 	header('Location: crudproductos.php');
 }else {
 	echo "Hubo un problema, datos no eliminados";
 }
?>