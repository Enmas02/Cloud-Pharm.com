<?php
require("connect_db.php");
include("Ingresar.php");
session_start();
error_reporting(0);

$correo = $_SESSION['correo'];
$codigo = $_SESSION['codigo'];

if($correo){

}

else{

    if($codigo == ''){
    
        header("location:InicioEstandar.php");

    }

    
    if($codigo == 'VQN2J-BB4RD-TWGM4-XHTRQ-Y4HHC'){

		header("location:InicioAdmin.php");

	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

        <h1>Este es el inicio del estandar</h1>

        <a href="Cerrar.php">Salir</a>
    
</body>
</html>