<?php

	error_reporting(0);
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$correo= $_GET['correo'];
	$clave=$_GET['clave'];
	$confirmar=$_GET['confirmar'];
	$codigo=$_GET['codigo'];
	$imagen=$_GET['imagen'];
	$encriptar = md5($clave);


	require("connect_db.php");

if ($nombre != null || $correo != null || $encriptar != null || $codigo != null || $imagen) {

	mysqli_query($conexion, "UPDATE registro set Nombre = '".$nombre."' , Correo = '".$correo."' , Contraseña = '".$encriptar."' , Codigo = '".$codigo."', Imagen = '".$imagen."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerUsuario.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarUsuario.php'</script>";

}

?>
