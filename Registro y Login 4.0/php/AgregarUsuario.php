<?php

	error_reporting(0);

	$nombre=$_POST['nombre'];
	$correo= $_POST['correo'];
	$clave=$_POST['clave'];
	$confirmar=$_POST['confirmar'];
	$codigo=$_POST['codigo'];
	$imagen=$_POST['imagen'];
	$encriptar = md5($clave);


	require("connect_db.php");

if ($clave==$confirmar) {


				mysqli_query($conexion,"INSERT INTO registro (Nombre,Correo,Contraseña,Codigo, Imagen)
				VALUES('$nombre','$correo','$encriptar','$codigo','$imagen')");

				echo "<script>location.href='../Admin/VerUsuario.php'</script>";

}

else {

	echo "<script>location.href='../Admin/Usuario.php'</script>";

}

?>
