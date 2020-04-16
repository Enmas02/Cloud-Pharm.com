<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="Insertar.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Registro</h2>
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user-check"></i>
					</div>
					<div class="div">
							<h5>Nombre</h5>
							<input type="text" name="nombre" class="input" required>
					</div>
				 </div>   
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Correo</h5>
           		   		<input type="email" name="correo" class="input" required>
           		   </div>
           		</div>
				   
				<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Clave</h5>
           		    	<input type="password" name="clave" class="input" required>
            	   </div>
				</div>
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Confirmar Clave</h5>
						 <input type="password" name="confirmar" class="input" required>
				 </div>
				  </div>
				  <div class="input-div pass">
					<div class="i">
							<i class="fas fa-key"></i>
					</div>
					<div class="div">
							<h5>Codigo</h5>
							<input type="text" name="codigo" class="input">
					</div>
				 </div>   
            	<a href="Login.php">Ya tienes cuenta? Logueate</a>
            	<input type="submit" class="btn" value="Registrarse">
            </form>
        </div>
    </div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
