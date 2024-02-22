<?php
$conexion = new mysqli("localhost", "root", "", "proyects");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['usuario_reg']) && isset($_POST['contraseña_reg'])) {
    $usuario = $_POST['usuario_reg'];
    $contraseña = $_POST['contraseña_reg'];

    $sql_verificar = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $resultado_verificar = $conexion->query($sql_verificar);

    if (!$resultado_verificar) {
        die("Error en la consulta: " . $conexion->error);
    }

    if ($resultado_verificar->num_rows > 0) {
        echo "El usuario ya existe";
    } else {
        $sql_registro = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";

        if ($conexion->query($sql_registro) === TRUE) {
            echo "Registro Exitoso";
        } else {
            echo "Error al registrar usuario: " . $conexion->error;
        }
    }
} else {
    echo "Complete los campos";
}

$conexion->close();
?>
