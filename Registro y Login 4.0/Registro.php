<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #000;
	text-transform: uppercase;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #000;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #000;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #008FFF;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #008FFF;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #000;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #008FFF;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #000;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #008FFF, #008FFF, #000);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}

	</style>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="php/Insertar.php" method="POST">
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
           		    	<input type="password" name="clave" id="clave" onkeyup="testPasswor(this.value);" class="input" required> <b><div id="mensaje" style="font-size: 13px;"></div></b>
            	   </div>
				</div>
				
				<script type="text/javascript">
                function testPasswor(contra) {

                if (contra.length === 0) {
                    document.getElementById("mensaje").innerHTML = "";
                    return;
                }

                var casos = new Array();
                casos.push("[a-z]");
                casos.push("[A-Z]");
                casos.push("[0-9]");

                var score = 0;
                for (var e = 0; e < casos.length; e++) {
                    if (new RegExp(casos[e]).test(contra)) {
                        score++;
                    }
                }

                var color = "";
                var seguridad = "";
                switch (score) {
                    case 0:
                    seguridad = "Débil";
                        color = "red";
                        break;
                    break;
                    case 1:
                        seguridad = "Débil";
                        color = "red";
                        break;
                    case 2:
                        seguridad = "Buena";
                        color = "orange";
                        break;
                    case 3:
                        seguridad = "Fuerte";
                        color = "green";
                        break;
                    }
                document.getElementById("mensaje").innerHTML = "Clave: " + seguridad;
                document.getElementById("mensaje").style.color = color;
                }
				</script>
				
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Confirmar Clave</h5>
						 <input type="password" name="confirmar" id="confirmar" class="input" required> <b><div id="error" style="font-size: 13px;"></div></b>
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
            	<input type="submit" class="btn" name="guardar" value="Registrarse">
            </form>
        </div>
    </div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>