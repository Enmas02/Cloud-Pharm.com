<?php
	error_reporting(0);	
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido= $_GET['apellido'];
	$direccion=$_GET['direccion'];
	$telefono=$_GET['telefono'];
	$fecha=$_GET['fechapedido'];
	$vendedor=$_GET['vendedor'];
	$credito=$_GET['credito'];

	require("connect_db.php");

if ($nombre != null || $apellido != null || $direccion != null || $telefono != null || $fecha != null || $vendedor != null || $credito != null) {

	mysqli_query($conexion, "UPDATE clientes set Nombre = '".$nombre."' , Apellido = '".$apellido."' , Direccion = '".$direccion."' , Telefono = '".$telefono."', Fecha_Pedido = '".$fecha."', Vendedor = '".$vendedor."' , Credito = '".$credito."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerClientes.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarClientes.php'</script>";

}

?>
