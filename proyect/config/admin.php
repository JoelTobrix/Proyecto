<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center><img src="https://pbs.twimg.com/profile_images/1760495893197860864/RvQFydo2_400x400.jpg" weight="100px" width="100px"></center>
    <title>Administrador</title>
    <!-- Incluye el archivo CSS -->
    <link rel="stylesheet" href="../models/modeloadmin.css">
</head>
<body>
    <form class="login-form" action="admin_code.php" method="post"> <!-- Modificado para apuntar a admin_code.php -->
        <div class="dark-overlay">
            <center>
                <div style="margin-left: 10px;">
                    <img src="https://us.123rf.com/450wm/tifani1/tifani11801/tifani1180100032/93016694-usuario-icono-de-ilustraci%C3%B3n-vectorial-sobre-fondo-negro.jpg" width="200px" height="200px">
                </div>
            </center>
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
            <input type="text" class="login-code" autofocus required placeholder="Codigo" name="codigo_reg" />
            <input type="submit" value="Ingresar como administrador" class="login-submit">
        </div>
    </form>
    
    <form action="../views/index.html" method="post">
       <input type="submit" value="Salir" class="login-submit"/> 
    </form>
    
    <form action="#" method="post">
        <input type="button" value="Acerca del codigo" class="login-submit" onclick="mostrarMensaje()"/> 
        <script>  
            function mostrarMensaje(){
                alert("Comuniquese con el servidor de la empresa para que le proporcione su codigo");
            }
        </script>
    </form>
</body>
</html>

