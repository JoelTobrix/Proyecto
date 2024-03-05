<?php
$conexion = new mysqli("localhost", "root", "", "proyects");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['codigo_reg'])) {
    $code = $_POST['codigo_reg'];
    $sql_verificar = "SELECT * FROM admins WHERE Codigo_acceso = ?";
    if ($stmt = $conexion->prepare($sql_verificar)) {
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado->num_rows > 0) {
            // Código correcto, redirige a Inventario.php
            header("Location: Inventario.php");
            exit;
        } else {
            // Código incorrecto, maneja el error aquí
            echo "<script>alert('El código ingresado no es válido.'); window.location.href='nombre_de_tu_archivo_html.html';</script>";
        }
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }
}
?>



