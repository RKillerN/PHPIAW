<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="margin-top: -54px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>productosview</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="padding-bottom: 0px;padding-top: 0px;margin-top: 50px;">
    <?php
    $i = 0;
    foreach ($data as $producto) {
        if ($i % 2 == 0) {
            echo '<div class="row">';
        }
        echo '<div class="col-6">';
        echo '<div class="gift">';
        echo '<div class="gift__img"><img src="imágenes/'.$producto['imagen'] . '"></div>';
        echo '<div class="gift__info">';
        echo '<h4 class="gift__name">' . $producto['npro'] . '</h4>';
        echo '<div class="gift__details">';
        echo '<p>' . $producto['descripcion'] . '</p>';
        echo '</div>';
        echo '<div class="gift__bottom">';
        echo '<div class="gift__price-wrap"><span class="gift__data">$' . $producto['precio'] . '</span></div>';

        // Botón para añadir al carrito y campo de cantidad
        echo '<form action="index.php?controller=ProductoController&action=carroAñadir" method="post">';
        echo '<input type="hidden" name="idProducto" value="' . $producto['IdPro'] . '">';
        echo '<input type="number" name="cantidad" value="1" min="1" style="width: 50px;">';
        echo '<button type="submit" name="addCarro" class="btn btn-primary">Agregar al carrito</button>';
        echo '</form>';

        echo '<form action="index.php?controller=ProductoController&action=verpro" method="post">';
        echo '<input type="hidden" name="idProducto" value="' . $producto['IdPro'] . '">';
        echo '<button type="submit" name="verpro" class="btn btn-primary">Ver producto</button>';
        echo '</form>';


        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        $i++;
        if ($i % 2 == 0 || $i == count($data)) {
            echo '</div>';
        }
    }
    ?>

</body>

</html>

