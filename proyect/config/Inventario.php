<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <tbody></tbody>
    </table>
    <form action="../config/DatosInventario.php" method="post">
        <!-- Botón para abrir el modal -->
        <input type="button" value="Agregar producto" class="product-submit" onclick="abrirModal()" /> 
    </form>

    <!-- Modal Contenido -->
    <div id="myModal" class="modal">
        <!-- Contenido Modal -->
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <h2>Agregar Producto</h2>
            <form id="formAgregarProducto" action="../config/DatosInventario.php" method="post">
                <!-- Tus campos de formulario aquí -->
                <input type="number" mane="Codigo de Barras" placeholder="Codigo de Barras" required><br>
                <input type="text" name="nombreProducto" placeholder="Nombre del Producto" required><br>
                <input type="number" name="precioProducto" placeholder="Precio" required><br>
                <input type ="number" mane="existenciaProducto" placeholder="Existencia" required><br>
                <input type="submit" value="Guardar Producto" class="product-submit">
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
    </script>
</body>
</html>
