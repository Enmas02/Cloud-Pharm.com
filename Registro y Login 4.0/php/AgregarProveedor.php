<?php
	error_reporting(0);
	$proveedor=$_POST['proveedor'];
	$empresa= $_POST['empresa'];
	$contacto=$_POST['contacto'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];

	require("connect_db.php");

if ($proveedor != null || $empresa != null || $contacto != null || $direccion != null || $telefono != null) {


				mysqli_query($conexion,"INSERT INTO proveedores (Proveedor,Empresa,Contacto,Direccion, Telefono)
				VALUES('$proveedor','$empresa','$contacto','$direccion','$telefono')");

				echo "<script>location.href='../Admin/VerProveedores.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Proveedor.php'</script>";

}

?>
