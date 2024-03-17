
<?php

include_once ('usudao.php');
include_once ('views/view.php');
class Usercontroller{

public function formulario(){
    View::show('views/login/loginview');
}
public function verificarUsuario() {
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $userDAO = new UserDAO();
        $usuarioDB = $userDAO->getUsuByNombre($usuario);
            // Verifica si se obtuvo la contraseña del usuario
            if (is_object($usuarioDB) && ($contrasena == $usuarioDB->contrasena)) {
                
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['rol'] = $usuarioDB->rol;

                    if ($_SESSION['rol'] == 2) {
                        // Redirige a la página de administrador
                        $productDAO = new ProductoDAO();
                        $arrayProductos = $productDAO->getAllProductos();
                        View::show('views/productosview', $arrayProductos);
                    } else {
                        // Redirige a la página principal
                        View::show('views/principal/principalview');
                    }
            } else {
                    // Contraseña incorrecta
                    $error['error'] = 'Usuario o contraseña no son correctos';
                    View::show('views/login/loginview', $error);
                }
            } 
        } 

    
public function cerrarSesion(){
        session_unset();
        session_destroy();

        View::show('views/principalview');
    }
    
    
    
}
    

?>
