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
    
        header("location:Productos.php");

    }

    if($codigo == 'VQN2J-BB4RD-TWGM4-XHTRQ-Y4HHC'){

      header("location:Productos.php");

	}

	if($codigo == 'NKGG6-WBPCC-HXWMY-6DQGJ-CPQVG'){

		header("location:Productos.php");

	}

	if($codigo == 'VYBBJ-TRJPB-QFQRF-QFT4D-H3GVB'){

		header("location:Productos.php");

	}

	if($codigo == 'JNRGM-WHDWX-FJJG3-K47QV-DRTFM'){

		header("location:Productos.php");

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
  border: 1px solid #E0F2F1;
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

#main-container{
	margin: 150px auto;
	width: 600px;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}

th, td{
	padding: 20px;
}

thead{
	background-color: #008FFF;
	border-bottom: solid 5px black;
	color: white;
}

tr:nth-child(even){
	background-color: white;
}

tr:hover td{
	background-color: #008FFF;
	color: white;
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
                 <p>Admin</p>
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
                <a href="Productos.php" class="active">
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
                <a href="Inventario.php">
                  <span class="icon"><i class="fas fa-inbox"></i></span>
                  <span class="title">Inventario</span>
                </a>
              </li>
            </ul>
          </div>
      </div>
      <div class="container">
        <div class="item">
          <div id="main-container">
            <table>
              <thead>
                <tr>
                  <th>Indicador</th><th>Enero'20</th><th>Febrero'20</th><th>Marzo'20</th><th>Abril'20</th><th>Mayo'20</th><th>Junio'20</th>
                </tr>
              </thead>
        
              <tr>
                <td>Ventas PVP</td><td>36,200</td><td>33,542</td><td>39,305</td><td>31,800</td><td>30,356</td><td>34,665</td>
              </tr>
              <tr>
                <td>Ventas uds</td><td>2,000</td><td>1,698</td><td>2,182</td><td>1,802</td><td>1,795</td><td>1,758</td>
              </tr>
              <tr>
                <td>Stock a PVP</td><td>20,000</td><td>23,912</td><td>22,535</td><td>24,661</td><td>23,473</td><td>22,774</td>
              </tr>
              <tr>
                <td>Stock uds</td><td>5,000</td><td>5,001</td><td>5,302</td><td>4,998</td><td>4,800</td><td>5,500</td>
              </tr>
              <tr>
                <td>Inventario RD$</td><td>19</td><td>21</td><td>17</td><td>23</td><td>23</td><td>20</td>
              </tr>
              <tr>
                <td>Inventario uds</td><td>23</td><td>28</td><td>20</td><td>26</td><td>26</td><td>26</td>
              </tr>
            </table>
          </div>
      </div>
      </div>
  </div>


</body>
</html>