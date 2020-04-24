<?php

if (isset($_GET['id'])) {
	include("connect_db.php");
	$id=$_GET['id'];
    $sql="DELETE from empleados WHERE ID='$id'";
	mysqli_query($conexion, $sql);
	header('location:../Admin/VerEmpleados.php');
    }

?>
