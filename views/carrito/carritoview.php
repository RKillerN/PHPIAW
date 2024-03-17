<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Carte-XXX-YYY-Rotate</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<?php
if (isset($data)) {
    $costeTotal = 0;
    foreach ($_SESSION['carro'] as $idProducto => $cantidad) {
        $productDAO = new ProductoDAO();
        $producto = $productDAO->getProductoById($idProducto);
        $cantidad = $_SESSION['carro'][$idProducto]; // Obtiene la cantidad del producto del carrito

        echo '<div class="content">
                <div class="row g-0">
                    <div class="col-md-12 col-lg-8 col-xl-12">
                        <div class="items">
                            <div class="product">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-3">
                                        <div class="product-image"><img src="imágenes/' . $producto['imagen'] . '"></div>
                                        <div class="col-md-5 product-info">
                                        <h1>' . $producto['npro'] . '</h1>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 quantity"><h4>Cantidad: ' . $cantidad . '</h4></div> <!-- Muestra la cantidad -->
                                    <div class="col-6 col-md-2 price"><span> Precio und: ' . $producto['precio'] . '</span></div>
                                </div>
                            </div>
                            <div class="product"></div>
                            <div class="product"></div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}
?>

    <script src="carrito/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>