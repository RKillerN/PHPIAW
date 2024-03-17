<?php
include_once ('db/db.php');
include_once ('views/view.php');

class ProductoDAO {
    private $con_db;

    public function __construct() {
        $this->con_db = Database::connect();
    }

    public function insertarProducto($nombre, $precio, $descripcion, $imagen) {
        $query = "INSERT INTO Productos (npro, precio, descripcion, imagen) VALUES (:nombre, :precio,:descripcion, :imagen)";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $imagen, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllProductos() {
        $query = "SELECT * FROM Productos";
        $stmt = $this->con_db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductoById($idProducto) {
        $query = "SELECT * FROM productos WHERE IdPro = :idProducto";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    // Método para eliminar un producto
    public function eliminarProducto($idProducto) {
        $query = "DELETE FROM Productos WHERE id_producto = :idProducto";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Método para obtener la ruta de la imagen
    public function getImagenPath($nombreImagen) {
        return "imágenes/" . $nombreImagen;
    }
}
?>
