<?php
	$id=$_GET['id'];
	$proveedor=$_GET['proveedor'];
	$empresa= $_GET['empresa'];
	$contacto=$_GET['contacto'];
	$direccion=$_GET['direccion'];
	$telefono=$_GET['telefono'];

	require("connect_db.php");

if ($proveedor != null || $empresa != null || $contacto != null || $direccion != null || $telefono != null) {

	mysqli_query($conexion, "UPDATE proveedores set Proveedor = '".$proveedor."' , Empresa = '".$empresa."' , Contacto = '".$contacto."' , Direccion = '".$direccion."', Telefono = '".$telefono."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerProveedores.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarProveedores.php'</script>";

}

?>
