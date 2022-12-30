<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Tienda</title>
</head>
<body>
    <?php
    require('Funciones/funcionesBD.php');
    require('Conexion/conexionBD.php');
    ?>
    <header>
        <div class="logo">
            <img src="imagen/logo.png" alt="logo" class="icono_logo">
        </div>
        <div class="botones">
            <i class="fa-solid fa-user"><a href=""></a></i>
            <i class="fa-solid fa-cart-arrow-down"><a href="#"></a></i>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="">Productos</a></li>
            <li><a href="">Marcas</a></li>
            <li><a href="">Ofertas</a></li>
        </ul>
        <div class="buscador">
            <input type="text" name="Buscar" id="buscador">
            <input type="search" name="lupa" id="lupa">
        </div>
    </nav>

</body>
</html>