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

    if($codigo == ''){
    
        header("location:Inicio.php");

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cloud_Pharm</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>
<body>

  <style>

@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

.wrapper{
  width: 100%;
  height: 100%;
}

.top_navbar{
  background: #000;
  height: 60px;
  display: flex;
  position: fixed;
  width: 100%;
  top: 0;
}

.top_navbar .hamburger{
  width: 80px;
  background: #008FFF;
  position: relative;
  font-size: 28px;
}

.top_navbar .hamburger .hamburger__inner{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  cursor: pointer;
  width: 40px;
  height: 20px;
}

.top_navbar .hamburger__inner > div{
  width: 30px;
  height: 2px;
  background: #fff;
  position: absolute;
  top: 0;
  left: 0;
}

.top_navbar .hamburger div.two{
  top: 10px;
  width: 40px;
}

.top_navbar .hamburger div.three{
  top: 20px;
}

.top_navbar .menu{
  width: calc(100% - 80px);
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
}

.top_navbar .menu .logo{
  color: #008FFF;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.top_navbar .menu .right_menu ul{
  display: flex;
}

.top_navbar .menu .right_menu ul li{
  position: relative;
}

.top_navbar .menu .right_menu ul li .fas{
  font-size: 22px;
  cursor: pointer;
  color: #008FFF;
}

.top_navbar .menu .right_menu ul li .profile_dd{
  position: absolute;
  top: 35px;
  right: -10px;
  background: #fff;
  box-shadow: 0 0 2px rgba(0,0,0,0.5);
  padding: 10px 0;
  width: 180px;
  border-radius: 3px;
  display: none;
  user-select: none;
}

.top_navbar .menu .right_menu ul li .profile_dd.active{
  display: block;
}

.top_navbar .menu .right_menu ul li .profile_dd .dd_item{
  padding: 10px;
  cursor: pointer;
  color: #008FFF;
}

.top_navbar .menu .right_menu ul li .profile_dd .dd_item:hover{
  background: #E0F2F1;
}

.top_navbar .menu .right_menu ul li .profile_dd:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 10px;
  border: 10px solid;
  border-color: transparent transparent #fff transparent;
}

.main_container .sidebar{
  position: fixed;
  top: 60px;
  left: 0;
  width: 225px;
  height: 100%;
  background: #008FFF;
  transition: all 0.3s ease;
}

.main_container .sidebar .sidebar__inner{
  position: relative;
}

.main_container .sidebar .profile{
  display: flex;
  align-items: center;
  color: #fff;
  padding: 20px 0;
  white-space: nowrap;
  transition: all 0.3s ease;
}

.main_container .sidebar .profile .img{
  padding: 0 18px;
}

.main_container .sidebar .profile img{
   width: 45px;
}

.main_container .sidebar .profile p:first-child{
  font-size: 14px;
  color: #000;
  margin-bottom: 3px;
}

.main_container .container{
  margin-top: 60px;
  width: calc(100% - 225px);
  margin-left: 225px;
  padding: 30px;
  transition: all 0.3s ease;
}

.main_container .sidebar ul li a{
  color: #fff;
  font-size: 18px;
  padding: 20px 30px;
  white-space: nowrap;
  display: flex;
  align-items: center;
  margin-bottom: 1px;
  transition: all 0.3s ease;
}

.main_container .sidebar ul li a .icon{
  margin-right: 15px;
  font-size: 28px;
}

.main_container .sidebar ul li a span{
  display: inline-block;
}

.main_container .sidebar ul li a:hover,
.main_container .sidebar ul li a.active{
  background: #fff;
  color: #000;
}

.main_container .container .item{
  background: #fff;
  border: none;
  margin-bottom: 30px;
  padding: 20px;
  font-size: 14px;
  line-height: 22px;
}

.wrapper.active .sidebar{
  width: 80px;
}

.wrapper.active .sidebar ul li a span.title,
.wrapper.active .profile_info
{
  display: none;
}

.wrapper.active .main_container .container{
  width: calc(100% - 80px);
  margin-left: 80px;
}

  </style>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        Cloud Pharm
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">
               <a href="Perfil.php"><div class="dd_item">Perfil</div></a>
               <a href="../php/Cerrar.php"><div class="dd_item">Cerrar Sesión</div></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
    
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="img">
              <a href="Perfil.php"><img src="../img/avatar.svg" alt="profile_pic"></a>
              </div>
              <div class="profile_info">
              <p class="profile_name"><?php echo $_SESSION['correo'];?></p>
                 <p>Estandar</p>
              </div>
            </div>
            <ul>
              <li>
                <a href="Inicio.php">
                  <span class="icon"><i class="fas fa-th-large"></i></span>
                  <span class="title">Inicio</span>
                </a>
              </li>
              <li>
                <a href="Clientes.php">
                  <span class="icon"><i class="fas fa-user-friends"></i></span>
                  <span class="title">Clientes</span>
                </a>
              </li>
              <li>
                <a href="Proveedores.php">
                  <span class="icon"><i class="fas fa-truck"></i></span>
                  <span class="title">Proveedores</span>
                </a>
              </li>
              <li>
                <a href="Productos.php">
                  <span class="icon"><i class="fab fa-elementor"></i></span>
                  <span class="title">Productos</span>
                </a>
              </li>
              <li>
                <a href="Empleados.php">
                  <span class="icon"><i class="fas fa-user-md"></i></span>
                  <span class="title">Empleados</span>
                </a>
              </li>
              <li>
                <a href="Inventario.php" class="active">
                  <span class="icon"><i class="fas fa-inbox"></i></span>
                  <span class="title">Inventario</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
      <div class="item">
          <center><h2>Administrar inventario. </h2></center>
        </div>
        <div class="item">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab a nesciunt doloribus. Explicabo minus cumque, molestiae tempore repellendus iusto enim maiores pariatur officiis perferendis excepturi, ut dolore laborum eligendi laudantium placeat aspernatur! Quos dolorum unde officiis labore est animi excepturi neque, provident, inventore nobis expedita facilis aspernatur, nihil in atque?
        </div>
        <div class="item">
          
        </div>
      </div>
  </div>
</div>	

</body>
</html>