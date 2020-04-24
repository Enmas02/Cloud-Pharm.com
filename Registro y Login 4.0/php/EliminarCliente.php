<?php

if (isset($_GET['id'])) {
	include("connect_db.php");
	$id=$_GET['id'];
    $sql="DELETE from clientes WHERE ID='$id'";
	mysqli_query($conexion, $sql);
	header('location:../Admin/VerClientes.php');
    }

?>
