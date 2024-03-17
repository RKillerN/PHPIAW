<?php
include_once ('productodao.php');
include_once ('views/view.php');

class ProductoController {
    private $productoDAO;

    public function  getAllProductos() {
        $productoDAO = new ProductoDAO();
        $arrayprod=$productoDAO->getAllProductos();
        View::show('views/productosview', $arrayprod);
    }


    public function mostrarProductoPorId($idProducto) {
        $producto = $this->productoDAO->getProductoById($idProducto);
        
    }


    public function carroAñadir() {

        if (!isset($_SESSION['carro'])){
            $_SESSION['carro']=array();
        }
        $idproducto = $_REQUEST['idProducto'];
        $cantidad = $_REQUEST['cantidad'];

        // Con $_REQUEST podemos acceder a los parámetros enviados por POST o GET
        if (!isset($_SESSION['carro'][$idproducto])) {
            // Si el producto no está en el carrito, añade la cantidad
            $_SESSION['carro'][$idproducto] = $cantidad;
        } else {
            // Si el producto ya está en el carrito, suma la cantidad nueva a la existente
            $_SESSION['carro'][$idproducto] += $cantidad;
        }
        // Mostramos de nuevo la lista de productos
        $productDAO=new ProductoDAO();
        $arrayProductos=$productDAO->getAllProductos();
        view::show('views/productosview', $arrayProductos);
    }
    public function verCarro(){
        if (isset($_SESSION['carro'])){
            View::show('views/carrito/carritoview',$_SESSION['carro']);
        }else{
            View::show('views/carrito/carritoview');
        }
    }
    public function añadirProducto() {
        // Verifica si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtén los datos del formulario
            $nombre = $_POST['nprod'];
            $precio = $_POST['price'];
            $descripcion = $_POST['desc'];
            
            // Obtiene el nombre de la imagen del campo "Nombre del producto"
            $imagen =$nombre. '.jpeg';

            // Puedes agregar más validaciones aquí si es necesario

            // Instancia de ProductoDAO
            $productoDAO = new ProductoDAO();

            // Llama al método para agregar producto
            $inserted = $productoDAO->insertarProducto($nombre, $precio, $descripcion, $imagen);

            if ($inserted) {
                View::show('views/productoadmin/productoadminview');
            } 
        }
    }
    public function productoAdmin(){
        $productoDAO = new ProductoDAO();
        $arrayprod=$productoDAO->getAllProductos();
        View::show('views/productoadmin/productoadminview', $arrayprod);
    }
    public function verpro(){
        $idpro= $_REQUEST['idProducto'];
        $productDAO = new ProductoDAO();
        $producto= $productDAO -> getProductoById($idpro);
        View::show('views/verpro/verproview', $producto);

    }
}
?>
