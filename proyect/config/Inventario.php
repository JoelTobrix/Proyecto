<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <left><img src="https://ingeniar.com.ec/wp-content/uploads/2023/02/igh-1.jpg" width="150px" weight="150px"> </left>
    
     <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .precio {
            color: green;
        }

        .existencia {
            color: blue;
        }

        .actions {
            text-align: right;
        }
        .product-submit {
            background-color: #4CAF50; /* Color de fondo */
            border: none; /* Elimina el borde */
            color: white; /* Color del texto */
            padding: 10px 20px; /* Espaciado interno */
            text-align: center; /* Alineación del texto */
            text-decoration: none; /* Elimina la decoración del texto */
            display: inline-block; /* Tipo de display */
            font-size: 16px; /* Tamaño del texto */
            margin: 4px 2px; /* Margen externo */
            cursor: pointer; /* Cambia el cursor */
            border-radius: 12px; /* Bordes redondeados */
            transition-duration: 0.4s; /* Duración de la transición */
        }

        .product-submit:hover {
            background-color: #45a049; /* Color de fondo al pasar el mouse */
        }
        .product-edit{
           background-color: #FFA500;
           border: none;
           color: white;
           padding: 10px 20px;
           text-align: center;
           text-decoration: none;
           font-size: 16px; /* Tamaño del texto */
            margin: 4px 2px;
            cursor: pointer; /* Cambia el cursor */
            border-radius: 12px;
            transition-duration: 0.4s;
        }
        .product-edit:hover{
            background-color: #FFA500; /* Color de fondo al pasar el mouse */
        }

        /* Estilo del fondo oscuro */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed; /* Se queda fijo en la pantalla */
            z-index: 1; /* Se sitúa sobre el resto del contenido */
            left: 0;
            top: 0;
            width: 100%; /* Ancho completo */
            height: 100%; /* Alto completo */
            overflow: auto; /* Habilita scroll si es necesario */
            background-color: rgba(0,0,0,0.4); /* Fondo negro con opacidad */
        }

        /* Estilo del contenido del modal */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% desde la parte superior y centrado horizontalmente */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Ancho del contenido */
        }

        /* El botón de cerrar (x) */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <title>Seccion Inventario</title>
</head>
<body>
<table id="products-table">
        <thead>
            <tr>
               <th>Código de Barras</th>
                <th>Producto</th>
                <th class="precio">Precio</th>
                <th class="existencia">Existencia</th>
                <th class="actions">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // Consultar la base de datos para obtener los productos
            $conexion = new mysqli("localhost", "root", "", "proyects");
            if ($conexion->connect_error) {
                die("Error al conectar: " . $conexion->connect_error);
            }
            $sql = "SELECT * FROM inventario";
            $result = $conexion->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Codigo_barras"] . "</td>";
                    echo "<td>" . $row["Producto"] . "</td>";
                    echo "<td>" . $row["Precio"] . "</td>";
                    echo "<td>" . $row["Existencia"] . "</td>";
                    echo "<td>" . $row["Acciones"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay productos en el inventario</td></tr>";
            }
            $conexion->close();
        ?>
        </tbody>
    </table>
    
        <!-- Botón para abrir el modal, incluye icono de imagen -->
        <input type="button" value="Agregar producto" class="product-submit" onclick="abrirModal()" style="padding: 8px 30px 8px 25px; background-image: url('https://cdn.icon-icons.com/icons2/218/PNG/512/Product-sale-report_25407.png'); background-size: 20px 20px; background-repeat: no-repeat; background-position: 5px center;">

        <input type="button" value ="Editar" class="product-edit" onclick="abrirModalEdit()" style="padding: 8px 30px 8px 25px; background-image: url('https://cdn.icon-icons.com/icons2/34/PNG/256/documentediting_editdocuments_text_documentedi_2820.png'); background-size: 20px 20px; background-repeat: no-repeat; background-position: 5px center;">
      

        
    </form>
    
    <script>
    function borrarCampos() {
        document.getElementById("formAgregarProducto").reset();
    }
</script>

<!-- Modal Contenido -->
<div id="myModal" class="modal">
    <!-- Contenido Modal -->
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h2>Agregar Producto</h2>
        <form id="formAgregarProducto" action="../config/DatosInventario.php" method="post">
            <!-- Tus campos de formulario aquí -->
            <input type="number" name="CodigoBarras" placeholder="Codigo de Barras" required><br>
            <input type="text" name="NombreProducto" placeholder="Nombre del Producto" required><br>
            <input type="number" name="PrecioProducto" placeholder="Precio" required><br>
            <input type="number" name="ExistenciaProducto" placeholder="Existencia" required><br>
            <input type="text" name="Acciones" placeholder="Acciones" required><br>
            <input type="submit" value="Guardar Producto" class="product-submit" style="padding: 8px 30px 8px 25px; background-image: url('https://cdn.icon-icons.com/icons2/10/PNG/256/savedisk_floppydisk_guardar_1543.png'); background-size: 20px 20px; background-repeat: no-repeat; background-position: 5px center;">
            <input type="button" value="Borrar Campos" class="product-submit" onclick="borrarCampos()" style="padding: 8px 30px 8px 25px; background-image: url('https://cdn.icon-icons.com/icons2/10/PNG/256/savedisk_floppydisk_guardar_1543.png'); background-size: 20px 20px; background-repeat: no-repeat; background-position: 5px center;"'); background-size: 20px 20px; background-repeat: no-repeat; background-position: 5px center;">
        </form>
    </div>
</div>


    <!-- Scripts de JS al final para evitar bloqueos de renderizado -->
    <script>
        // Función para abrir el modal
        function abrirModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Función para cerrar el modal
        function cerrarModal() {
            document.getElementById("myModal").style.display = "none";
        }
        // Función para borrar los campos del formulario
        function borrarCampos() {
            document.getElementById("formAgregarProducto").reset();
        }

        // AJAX para enviar el formulario y agregar producto a la tabla
        $(document).ready(function() {
            $('#formAgregarProducto').submit(function(event) {
                // Detener el envío del formulario normal
                event.preventDefault();

                // Enviar datos del formulario mediante AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: 'json', // Esperamos recibir datos JSON
                    success: function(response) {
                        // Construir una nueva fila con los datos recibidos
                        var newRow = '<tr>';
                        newRow += '<td>' + response.Codigo_barras + '</td>';
                        newRow += '<td>' + response.Producto + '</td>';
                        newRow += '<td>' + response.Precio + '</td>';
                        newRow += '<td>' + response.Existencia + '</td>';
                        newRow += '<td>' + response.Acciones + '</td>';
                        newRow += '</tr>';

                        // Agregar la nueva fila al tbody de la tabla
                        $('#products-table tbody').append(newRow);

                        alert('Producto agregado exitosamente');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Error al agregar producto');
                    }
                });
            });
        });
    </script>

 <!-- Modal -->
 <div id="ModalEdit" class="modal">
 <div class="modal-content">
        <span class="close" onclick="cerrarModalEdit()">&times;</span>
        <h2 align="center">Editar Productos</h2>

 <!-- abrirModal Editar -->
 <script>
        // Función para abrir el modal
        function abrirModalEdit() {
            document.getElementById("ModalEdit").style.display = "block";
        }
        function cerrarModalEdit(){
            document.getElementById("ModalEdit").style.display = "none";
        }

       

        
    </script>
 


</body>
</html>

