<?php
	require("../Admin/ActualizarUsuario.php");
	error_reporting(0);
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$correo= $_POST['correo'];
	$clave=$_POST['clave'];
	$confirmar=$_POST['confirmar'];
	$codigo=$_POST['codigo'];
	$encriptar = md5($clave);

	$nombreImg=$_FILES['imagen']['name'];
    $ruta=$_FILES['imagen']['tmp_name'];
    $destino="../img/".$nombreImg;

	require("connect_db.php");

if ($confirmar == $clave) {

	mysqli_query($conexion, "UPDATE registro set Nombre = '".$nombre."' , Correo = '".$correo."' , Contraseña = '".$encriptar."' , Codigo = '".$codigo."', Imagen = '".$destino."' where ID = '".$id."'");

	echo "<script>location.href='../Admin/VerUsuario.php'</script>";

}

else {

	echo "<script>location.href='../Admin/ActualizarUsuario.php'</script>";

}

?>
