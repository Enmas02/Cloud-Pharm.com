<?php
	error_reporting(0);
	$nombre=$_POST['nombre'];
	$concentracion= $_POST['concentracion'];
	$fabricante=$_POST['fabricante'];
	$presentacion=$_POST['presentacion'];
	$precio=$_POST['precio'];

	require("connect_db.php");

if ($nombre != null || $concentracion != null || $fabricante != null || $presentacion != null || $precio != null) {


				mysqli_query($conexion,"INSERT INTO medicamentos (nombre,concentracion,fabricante,presentacion_disponible,precio)
				VALUES('$nombre','$concentracion','$fabricante','$presentacion','$precio')");

				echo "<script>location.href='../Admin/VerProductos.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Productos.php'</script>";

}

?>
