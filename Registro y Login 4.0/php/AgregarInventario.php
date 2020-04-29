<?php
	error_reporting(0);
	$producto=$_POST['producto'];
	$descripcion= $_POST['descripcion'];
	$stock=$_POST['stock'];
	$entradas=$_POST['entradas'];
	$salidas=$_POST['salidas'];
	$total=$_POST['total'];

	require("connect_db.php");

if ($producto != null || $descripcion != null || $stock != null || $entradas != null || $salidas != null || $total) {


				mysqli_query($conexion,"INSERT INTO inventario (Producto,Descripcion,Stock,Entradas,Salidas,Total)
				VALUES('$producto','$descripcion','$stock','$entradas','$salidas','$total')");

				echo "<script>location.href='../Admin/VerInventario.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Inventario.php'</script>";

}

?>
