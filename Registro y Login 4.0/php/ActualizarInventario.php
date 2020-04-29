<?php
	error_reporting(0);	
	$id=$_GET['id'];
	$producto=$_GET['producto'];
	$descripcion= $_GET['descripcion'];
	$stock=$_GET['stock'];
	$entradas=$_GET['entradas'];
	$salidas=$_GET['salidas'];
	$total=$_GET['total'];

	require("connect_db.php");

if ($producto != null || $descripcion != null || $stock != null || $entradas != null || $salidas != null || $total) {

	mysqli_query($conexion, "UPDATE inventario set Producto = '".$producto."' , Descripcion = '".$descripcion."' , Stock = '".$stock."' , Entradas = '".$entradas."', Salidas = '".$salidas."' , Total = '".$total."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerInventario.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarInventario.php'</script>";

}

?>
