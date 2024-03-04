<?php
$conexion = new mysqli("localhost", "root", "", "proyects");
if ($conexion->connect_error) {
    die("Error al conectar: " . $conexion->connect_error);
}

if (isset($_POST['CodigoBarras']) && isset($_POST['NombreProducto']) && isset($_POST['PrecioProducto']) && isset($_POST['ExistenciaProducto']) && isset($_POST['Acciones'])) {

    $Codigo = $_POST['CodigoBarras'];
    $Product = $_POST['NombreProducto'];
    $Preci = $_POST['PrecioProducto'];
    $Existencia = $_POST['ExistenciaProducto'];
    $Action = $_POST['Acciones'];

    $sql_insertar = "INSERT INTO inventario(Codigo_barras, Producto, Precio, Existencia, Acciones) VALUES('$Codigo', '$Product', '$Preci', '$Existencia', '$Action')";
    if ($conexion->query($sql_insertar) === TRUE) {
        // Seleccionamos datos insertados
        $sql_select = "SELECT * FROM inventario WHERE Codigo_barras = '$Codigo'";
        $resultado = $conexion->query($sql_select);
        $fila = $resultado->fetch_assoc();
       
        echo json_encode($fila);
    } else {
        
        echo json_encode(array("error" => "Error en agregar producto: " . $conexion->error));
    }
} else {
    
    echo json_encode(array("error" => "Faltan parámetros en la solicitud"));
}

$conexion->close(); // Cierre de conexión
?>

