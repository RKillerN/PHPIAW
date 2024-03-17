

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PHP-Contact Form #dark</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div id="contact">
        <div class="container">
            <div class="intro">
                <h2>Añadir producto</h2>
            </div>
            <form id="contact-form" action="index.php?controller=ProductoController&action=añadirProducto" method="post">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label class="control-label" for="form_name">Nombre del
                                    producto</label><input class="form-control" type="text" id="form_name"
                                    data-error="Nombre del producto" name="nprod" required=""
                                    placeholder="Escriba el nombre del producto">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"><label class="control-label" for="form_email">Precio</label><input
                                class="form-control" type="number" id="form_email" data-error="Se requiere el precio."
                                name="price" required="" placeholder="Escriba el precio">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="control-label" for="form_phone">Descripción</label><input
                                class="form-control" type="text" id="form_phone"
                                data-error="Descripción" name="desc"
                                placeholder="Escriba la descripción del producto">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><button class="btn btn-success btn-send" value="Senden" type="submit">Senden
                        </button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>