<?php
require("../php/connect_db.php");
include("../php/Ingresar.php");
session_start();
error_reporting(0);

$correo = $_SESSION['correo'];
$codigo = $_SESSION['codigo'];

if($correo){

}

else{

    if($codigo == 'NKGG6-WBPCC-HXWMY-6DQGJ-CPQVG'){
    
        header("location:Inicio.php");

    }

    if($codigo == 'VQN2J-BB4RD-TWGM4-XHTRQ-Y4HHC'){

		header("location:Inicio.php");

	}

	if($codigo == 'NKGG6-WBPCC-HXWMY-6DQGJ-CPQVG'){

		header("location:Inicio.php");

	}

	if($codigo == 'VYBBJ-TRJPB-QFQRF-QFT4D-H3GVB'){

		header("location:Inicio.php");

	}

	if($codigo == 'JNRGM-WHDWX-FJJG3-K47QV-DRTFM'){

		header("location:Inicio.php");

	}

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ver Productos</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>
<body>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="../img/avatar.svg" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						<?php echo $_SESSION['correo'];?> <br><small class="roboto-condensed-light">Admin</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="Inicio.php"><i class="fas fa-th-large"></i> &nbsp; Inicio</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-box-open fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="Productos.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Producto</a></li>
								<li><a href="VerProductos.php"><i class="fas fa-tasks"></i> &nbsp; Ver Productos</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-child fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="Cliente.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Cliente</a></li>
								<li><a href="VerClientes.php"><i class="fas fa-tasks"></i> &nbsp; Ver Clientes</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-truck-moving fa-fw"></i> &nbsp; Proveedores <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="Proveedor.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Proveedor</a></li>
								<li><a href="VerProveedores.php"><i class="fas fa-tasks"></i> &nbsp; Ver Proveedores</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-user-md"></i> &nbsp; Empleados <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="Empleado.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Empleado</a></li>
								<li><a href="VerEmpleados.php"><i class="fas fa-tasks"></i> &nbsp; Ver Empleados</a></li>
							</ul>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-inbox"></i> &nbsp; Inventario <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li><a href="Inventario.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Inventario</a></li>
								<li><a href="VerInventario.php"><i class="fas fa-tasks"></i> &nbsp; Ver Inventario</a></li>
							</ul>
						</li>


					</ul>
				</nav>
			</div>
		</section>

		<!-- Page content -->
		<section class="full-box page-content">
			<nav class="full-box navbar-info">
				<a href="#" class="float-left show-nav-lateral"><i class="fas fa-exchange-alt"></i></a>
				<a href="#" data-toggle="modal" data-target="#ModalHelp"><i class="far fa-question-circle"></i></a>
				<a href="Usuario.php"><i class="fas fa-user-cog"></i></a>
				<a href="#" class="btn-exit-system"><i class="fas fa-power-off"></i></a>
			</nav>

			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-user-md"></i> &nbsp; Empleados
				</h3>
				<p class="text-justify">
					Bienvenid@ <?php echo $_SESSION['nombre'];?>, Estás en los empleados, nuestro sistema gestor de farmacia está aquí para hacerte la vida más comoda, aquí puedes insertar empleados y también ver los empleados.
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="Empleado.php"><i class="fas fa-plus"></i> &nbsp; Nuevo Empleado</a>
					</li>
					<li>
						<a class="active" href="VerEmpleados.php"><i class="fas fa-tasks"></i> &nbsp; Ver Empleados</a>
					</li>
				</ul>	
			</div>
			
			<?php
			
			include("../php/connect_db.php");
			$sql="SELECT * FROM empleados";
			$resultado=mysqli_query($conexion, $sql);
			
			?>

			<!-- Content here-->
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Fecha de nacimiento</th>
								<th>Salario</th>
								<th>Departamento</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>

						<?php while($filas=mysqli_fetch_array($resultado)){ ?>

							<tr class="text-center" >
								<td><?php echo $filas['Nombre']?></td>
								<td><?php echo $filas['Apellido']?></td>
								<td><?php echo $filas['Direccion']?></td>
								<td><?php echo $filas['Telefono']?></td>
								<td><?php echo $filas['Fecha_Nacimiento']?></td>
								<td><?php echo $filas['Salario']?></td>
								<td><?php echo $filas['Departamento']?></td>
								<td>
									<a href="ActualizarEmpleados.php?id=<?php echo $filas['ID']?>" type="button" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>
									</a>
									<a href="../php/EliminarEmpleado.php?id=<?php echo $filas['ID']?>" type="button" class="btn btn-warning">
										<i class="far fa-trash-alt"></i>
								  	</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>

		</section>

		<!-- Help Modal -->
		<div class="modal fade" id="ModalHelp" tabindex="-1" role="dialog" aria-labelledby="ModalHelpTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title roboto-medium text-center" id="exampleModalLongTitle">¿Necesitas ayuda?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Puedes contactarnos en nuestras redes sociales: 
						<br><br>
						<a href="https://www.facebook.com/Cloud-Pharm-111034883911362" target="_blank" class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
						<a href="https://twitter.com/PharmCloud" target="_blank" class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
						<a href="https://www.instagram.com/cloud_pharm/" target="_blank" class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
						<a href="https://www.linkedin.com/in/cloud-pharm-farmacia-en-la-nube-2559641a6/" target="_blank" class="li-ic mr-3" role="button"><i class="fab fa-lg fa-linkedin-in"></i></a>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light roboto-condensed-regular" data-dismiss="modal">Entendido!</button>
					&nbsp;
				</div>
				</div>
			</div>
		</div>
	</main>
	
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
	<!-- jQuery V3.4.1 -->
	<script src="./js/jquery-3.4.1.min.js" ></script>

	<!-- popper -->
	<script src="./js/popper.min.js" ></script>

	<!-- Bootstrap V4.3 -->
	<script src="./js/bootstrap.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<script src="./js/jquery.mCustomScrollbar.concat.min.js" ></script>

	<!-- Bootstrap Material Design V4.0 -->
	<script src="./js/bootstrap-material-design.min.js" ></script>
	<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	<script src="./js/main.js" ></script>
</body>
</html>