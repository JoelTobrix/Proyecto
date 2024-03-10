<?php
$conexion = new mysqli("localhost","root","","proyects");

    if(isset($_POST['usuario'])&& isset($_POST['contraseña'])){
        $usuario= $_POST['usuario'];
        $contraseña= $_POST['contraseña'];
    //Consulta SQL
    $sql= "SELECT* FROM usuarios WHERE usuario='$usuario' AND contraseña= '$contraseña'";
    $resultados=$conexion-> query($sql);
           //Verificar el registro
           if($resultados-> num_rows>0){
            echo"Bienvenido, $usuario";
            //Linea acceso cuando inicias sesion
            header('Location: ../models/Principal.php');
           }else{
            echo "error";
           }    
    }else{
        echo "Complete los campos por favor";
    }
    $conexion->close();
?>