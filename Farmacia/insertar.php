<?php 

        $conexion = new mysqli("localhost", "root", "", "cloudpharm");

        $NOMBRE = $_POST['nombre'];
        $CORREO =  $_POST['correo'];
        $CLAVE1 = $_POST['pass1'];
        $CLAVE2 = $_POST['pass2'];
        $CODIGO = $_POST['codigo'];



        if ($CLAVE1 != $CLAVE2) {
            echo "
                    <script>
                            alert('Las claves no son iguales');
                            history.back();
                    </script>
            ";
    } else {
            $clave = password_hash($CLAVE2, PASSWORD_DEFAULT);



            
        $query = "INSERT INTO cloudpharm (Nombre, Correo, Contraseña, Confirmar_contraseña ,Codigo) VALUES(
            '$NOMBRE',  '$CORREO' ,'$clave', '$CLAVE2', '$CODIGO '     
         )";
 
         $result = $conexion->query($query);
 
?>


    