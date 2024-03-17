<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloscss/header.css">
    <title>Like Rainbows Smells</title>
</head>
<body class="htmlP">

<div class="cabecera">
    <center><b><h1 class="titulo">Smells Like Rainbows</h1></b></center>
</div>
<nav class="opciones">
    <ul class="menu">
        <li class="menu-item menu1">
            <a href="index.php"><font size="5em">Inicio</font></a>
        </li>
        <li class="menu-item menu2">
            <a href="index.php?controller=ProductoController&action=getAllProductos"><font size="5em">Productos</font></a>
            </li>
        <li class="menu-item menu1">
            <?php
            include_once ('models/usucontroller.php');
            // Comprobar si existe una sesión de usuario
            if (isset($_SESSION['usuario'])) {
                echo '<div class="usuario-menu"><font size="5em">'.$_SESSION['usuario'].'</font>
                  <ul class="submenu">
                    <li><a href="index.php?controller=Usercontroller&action=cerrarSesion">Cerrar sesión</a></li>
                  </ul></div>';
            } else {
                echo '<font size="5em">Sesión</font>
                  <ul class="submenu">
                    <li><a href="index.php?controller=Usercontroller&action=formulario">Iniciar sesión</a></li>
                  </ul>';
            }
            ?>
        </li>
    </ul>
    <?php
   if (isset($_SESSION['rol'])){
        if ($_SESSION['rol']== 2){
        echo '<a href="index.php?controller=ProductoController&action=productoAdmin"><img src="imágenes/carro.png"width="50em"></a>';
            }else{
        echo '<a href="index.php?controller=ProductoController&action=verCarro"><img src="imágenes/carro.png" width="50em"></a>';
            }
   }else{
        echo '<a href="index.php?controller=ProductoController&action=verCarro"><img src="imágenes/carro.png"width="50em"></a>';
   }
    ?>
</nav>

</body>
</html>
