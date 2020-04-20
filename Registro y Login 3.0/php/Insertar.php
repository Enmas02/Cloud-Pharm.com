<?php

	$nombre=$_POST['nombre'];
	$correo= $_POST['correo'];
	$clave=$_POST['clave'];
	$confirmar=$_POST['confirmar'];
	$codigo=$_POST['codigo'];
	$imagen=['../img/avatar.svg'];
	$encriptar = md5($clave);


	require("connect_db.php");

if ($clave==$confirmar) {


				mysqli_query($conexion,"INSERT INTO registro (Nombre,Correo,Contraseña,Codigo,Imagen)
				VALUES('$nombre','$correo','$encriptar','$codigo','$imagen')");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='../Login.php'</script>";

}

else {

	echo "<script>location.href='../Registro.php'</script>";

}

?>
