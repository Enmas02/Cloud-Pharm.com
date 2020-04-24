<?php
require("../php/connect_db.php");
include("../php/Ingresar.php");
session_start();
error_reporting(0);

$correo = $_SESSION['correo'];
$codigo = $_SESSION['codigo'];

include("../php/connect_db.php");
$id=$_GET['id'];
$sql="SELECT * FROM inventario WHERE ID='$id'";
$resultado=mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Nuevo Producto</title>

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
					<i class="fas fa-inbox"></i> &nbsp; Inventario
				</h3>
				<p class="text-justify">
					Bienvenid@ <?php echo $_SESSION['nombre'];?>, Estás en el inventario, nuestro sistema gestor de farmacia está aquí para hacerte la vida más comoda, aquí puedes insertar en el inventario y también ver el inventario.
				</p>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a class="active" href="Inventario.php"><i class="fas fa-plus"></i> &nbsp; Nuevo en Inventario</a>
					</li>
					<li>
						<a href="VerInventario.php"><i class="fas fa-tasks"></i> &nbsp; Ver el Inventario</a>
					</li>
				</ul>	
			</div>

			<?php while($filas=mysqli_fetch_array($resultado)){ ?>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form action="../php/ActualizarInventario.php" method="GET" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-inbox"></i> &nbsp; Información</legend>
						<div class="container-fluid">
							<div class="row">
								<input type="hidden" name="id" value="<?php echo $filas['ID']?>">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProductBrand" class="bmd-label-floating">Producto</label>
										<input type="text" value="<?php echo $filas['Producto']?>" required name="producto" pattern="[a-zA-Z0-9]{1,25}" class="form-control" id="ProductBrand" maxlength="25">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProductModel" class="bmd-label-floating">Descripción</label>
										<input type="text" value="<?php echo $filas['Descripcion']?>" required name="descripcion" pattern="[a-zA-z0-9 ]{1,20}" class="form-control" id="ProductModel" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProducPrice" class="bmd-label-floating">Stock</label>
										<input type="num" value="<?php echo $filas['Stock']?>" required name="stock" pattern="[0-9.]{1,15}" class="form-control" id="ProducPrice" maxlength="15">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProductBrand" class="bmd-label-floating">Entradas</label>
										<input type="num" value="<?php echo $filas['Entradas']?>" required name="entradas" pattern="[a-zA-Z0-9]{1,25}" class="form-control" id="ProductBrand" maxlength="25">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProductModel" class="bmd-label-floating">Salidas</label>
										<input type="num" value="<?php echo $filas['Salidas']?>" required name="salidas" pattern="[a-zA-z0-9 ]{1,20}" class="form-control" id="ProductModel" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="ProducPrice" class="bmd-label-floating">Total</label>
										<input type="num" value="<?php echo $filas['Total']?>" required name="total" pattern="[0-9.]{1,15}" class="form-control" id="ProducPrice" maxlength="15">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br>
					<p class="text-center" style="margin-top: 40px;">

						&nbsp; &nbsp;
						<button type="submit" class="btn btn-success"><i class="far fa-save"></i> &nbsp; Actualizar</button>
					</p>
				</form>
				<?php } ?>
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