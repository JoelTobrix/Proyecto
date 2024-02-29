<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Incluye el archivo CSS -->
    <link rel="stylesheet" href="modelo.css">
</head>
<body>
    <form class="login-form" action="registrarse.php" method="post"> 
        <div class="dark-overlay">
            <center> 
                <img src="https://us.123rf.com/450wm/tifani1/tifani11801/tifani1180100032/93016694-usuario-icono-de-ilustraci%C3%B3n-vectorial-sobre-fondo-negro.jpg" width=200px; height= 200px;> 
            </center>
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-lock fa-stack-1x"></i>
            </span>
            <input type="text" class="login-username" autofocus required placeholder="Usuario" name="usuario_reg" />
            <input type="password" class="login-password" required placeholder="Contraseña" name="contraseña_reg"/>
            <center> 
                <input type="submit" value="Registrar Ahora" class="login submit"> 
            </center>
        </div>
    </form>
</body>
</html>

