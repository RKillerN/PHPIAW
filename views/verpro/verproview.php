<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detalles del producto</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Detalles del producto</h1>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-thumbnail img-fluid center-block" src="imágenes/<?php echo $data['imagen']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h1><?php echo $data['npro']; ?></h1>
                <p><?php echo $data['descripcion']; ?></p>
                <h2 class="text-center text-success"><i class="fa fa-dollar"><?php echo $data['precio']; ?></i></h2>
                <form action="index.php?controller=ProductoController&action=carroAñadir" method="post">
                    <input type="hidden" name="idProducto" value="<?php echo $data['IdPro']; ?>">
                    <input type="number" name="cantidad" value="1" min="1" style="width: 50px;">
                    <button type="submit" name="addCarro" class="btn btn-primary">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
