<?php

if (isset($_POST['in'])) {
    
    $correo=$_POST['correo'];
	$clave=$_POST['clave'];
    $encriptar = md5($clave);

    session_start();
    error_reporting(0);
    require("connect_db.php");

      $sql = "SELECT * FROM registro WHERE Correo='$correo'";
      $result = mysqli_query($conexion,$sql) or die ($mysqli->error());
  
      while($row=mysqli_fetch_array($result)){
          
        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == ''){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario estandar");</script> ';
            echo "<script>location.href='../Estandar/Inicio.php'</script>";
        
        }
        
        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == 'NKGG6-WBPCC-HXWMY-6DQGJ-CPQVG'){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario admin");</script> ';
            echo "<script>location.href='../Admin/Inicio.php'</script>";
        
        }

        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == 'VQN2J-BB4RD-TWGM4-XHTRQ-Y4HHC'){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario admin");</script> ';
            echo "<script>location.href='../Admin/Inicio.php'</script>";
        
        }

        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == '4JPCP-DJF9V-WX7PT-B9WX2-R47C6'){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario admin");</script> ';
            echo "<script>location.href='../Admin/Inicio.php'</script>";
        
        }

        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == 'VYBBJ-TRJPB-QFQRF-QFT4D-H3GVB'){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario admin");</script> ';
            echo "<script>location.href='../Admin/Inicio.php'</script>";
        
        }

        if($row['Correo'] == $correo &&  $row['Contraseña'] == $encriptar && $row['Codigo'] == 'JNRGM-WHDWX-FJJG3-K47QV-DRTFM'){

            $_SESSION['correo'] = $correo;
            $_SESSION['codigo'] = $row['Codigo'];
            $_SESSION['nombre'] = $row['Nombre'];
            
            echo ' <script language="javascript">alert("Bienvenido, Usuario admin");</script> ';
            echo "<script>location.href='../Admin/Inicio.php'</script>";
        
        }


        else
        {

            echo ' <script language="javascript">alert("Correo o Clave incorrectos");</script> ';
            echo "<script>location.href='../Login.php'</script>";

        }


          
    }
          
}

?>