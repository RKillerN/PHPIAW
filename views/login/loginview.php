<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="views/login/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/login/assets/css/styles.min.css">
</head>

<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>

                                    <h6 class="h5 mb-0">¡Bienvenido!</h6>
                                    <p class="text-muted mt-2 mb-5">Introduzca su nombre de usuario y su contraseña.</p>

                                    <form action='index.php?controller=Usercontroller&action=verificarUsuario' method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombre</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="usuario">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
                                        </div>
                                        <button type="submit" class="btn btn-theme">Login</button>
                                        <?php
                                        if (isset($data)) {
                                            echo '<br><div class="alert alert-danger" role="alert">
                                            '.$data['error'].'
                                          </div>';
                                        }
                                        ?>
                                        
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">¡Descubre nuevos olores!</h4>
                                        <p class="lead text-white">"Todo lo que busca de perfumería aquí lo encontrará"</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                </div>
              

                <p class="text-muted text-center mt-3 mb-0">Don't have an account? <a href="register.html"
                        class="text-primary ml-1">register</a></p>

               

            </div>
           
        </div>
      
    </div>
    <script src="views/login/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>