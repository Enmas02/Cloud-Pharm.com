<?php

	$nombre=$_POST['nombre'];
	$apellido= $_POST['apellido'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fecha=$_POST['fechapedido'];
	$vendedor=$_POST['vendedor'];
	$credito=$_POST['credito'];

	require("connect_db.php");

if ($nombre != null || $apellido != null || $direccion != null || $telefono != null || $fecha != null || $vendedor != null || $credito != null) {


				mysqli_query($conexion,"INSERT INTO clientes (Nombre,Apellido,Direccion,Telefono, Fecha_Pedido,Vendedor,Credito)
				VALUES('$nombre','$apellido','$direccion','$telefono','$fecha','$vendedor','$credito')");

				echo "<script>location.href='../Admin/VerClientes.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Cliente.php'</script>";

}

?>