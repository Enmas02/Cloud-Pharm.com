<?php
	error_reporting(0);	
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido= $_GET['apellido'];
	$direccion=$_GET['direccion'];
	$telefono=$_GET['telefono'];
	$fecha=$_GET['fechanacimiento'];
	$salario=$_GET['salario'];
	$departamento=$_GET['departamento'];

	require("connect_db.php");

if ($nombre != null || $apellido != null || $direccion != null || $telefono != null || $fecha != null || $salario != null || $departamento != null) {

	mysqli_query($conexion, "UPDATE empleados set Nombre = '".$nombre."' , Apellido = '".$apellido."' , Direccion = '".$direccion."' , Telefono = '".$telefono."', Fecha_Nacimiento = '".$fecha."' , Salario = '".$salario."', Departamento = '".$departamento."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerEmpleados.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarEmpleados.php'</script>";

}

?>
