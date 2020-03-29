<?php
        $mysqli = new mysqli("localhost", "root", "", "cloudpharm");

        $curso = "";       
        $nombre_user = "";

        $password = $_POST["pass"];
        $correo = $_POST['correo'];

        session_start();

        $_SESSION['valor'] = $correo;
        $_SESSION['clave'] = $password;

    
        

            // Hala la Clave para verificar si son Correctas
            $consulta = "SELECT * FROM usuarios WHERE Correo = '$correo'";
            $result = $mysqli->query($consulta);

                

            $mostrar = $result->fetch_array();

            if(password_verify($password, $mostrar['CLAVE'])) {
                
                // Ya que la Clave Esta Registrada Logueame Ahora

          
        try{

            $base = new PDO("mysql:host=localhost; dbname=Fundacion;", "root", "");

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM usuario WHERE Correo = :name";

            $resultado = $base->prepare($sql);

            $name = htmlentities(addslashes($_POST["correo"]));

            $resultado->bindValue(":name", $name);

            $resultado->execute();

            $numero_registro = $resultado->rowCount();
?> 