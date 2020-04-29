<?php
	error_reporting(0);
	$nombre=$_POST['nombre'];
	$apellido= $_POST['apellido'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fecha=$_POST['fechanacimiento'];
	$salario=$_POST['salario'];
	$departamento=$_POST['departamento'];

	require("connect_db.php");

if ($nombre != null || $apellido != null || $direccion != null || $telefono != null || $fecha != null || $salario != null || $departamento != null) {

				mysqli_query($conexion,"INSERT INTO empleados (Nombre, Apellido, Direccion, Telefono, Fecha_Nacimiento, Salario, Departamento)
				VALUES('$nombre','$apellido','$direccion','$telefono','$fecha','$salario','$departamento')");

				echo "<script>location.href='../Admin/VerEmpleados.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Empleado.php'</script>";

}

?>
