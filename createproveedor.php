<?php
if (!isset($_POST['oculto'])) {
 	exit();
 } 

 include 'conexion.php';
 $tipodeid = $_POST['txtTid'];
 $numid = $_POST['txtNid'];
 $Nos = $_POST['txtNos'];
 $Dr = $_POST['txtDr'];
 $Ndc = $_POST['txtNdc'];
 $Cdc = $_POST['txtCdc'];

 $sentencia = $bd->prepare("INSERT INTO proveedores(tid,nid,nors,dr,ndc,cdc) VALUES(?,?,?,?,?,?);");
 $resultado = $sentencia->execute([ $tipodeid,$numid,$Nos,$Dr, $Ndc,$Cdc]);

 if ($resultado === True) {
 	header('Location: crudproveedores.php');
 }else {
 	echo "Hubo un problema, datos no insertados";
 }
?>