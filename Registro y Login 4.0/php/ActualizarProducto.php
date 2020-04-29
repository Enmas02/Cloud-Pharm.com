<?php
	error_reporting(0);	
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$concentracion= $_GET['concentracion'];
	$fabricante=$_GET['fabricante'];
	$presentacion=$_GET['presentacion'];
	$precio=$_GET['precio'];

	require("connect_db.php");

if ($nombre != null || $concentracion != null || $fabricante != null || $presentacion != null || $precio != null) {

	mysqli_query($conexion, "UPDATE medicamentos set nombre = '".$nombre."' , concentracion = '".$concentracion."' , fabricante = '".$fabricante."' , presentacion_disponible = '".$presentacion."', precio = '".$precio."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerProductos.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarProductos.php'</script>";

}

?>
