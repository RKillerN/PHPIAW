<?php
include_once ('db/db.php');

class UserDAO {
    private $con_db;

    public function __construct() {
        $this->con_db = Database::connect();
    }

    public function insertarUsuario($nomusu, $email, $pssword, $rol) {
        $query = "INSERT INTO usuarios (nusuario, email, contrasena, rol) VALUES (:nombre, :email, :contrasena, :rol)";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':nombre', $nomusu, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $pssword, PDO::PARAM_STR);
        $stmt->bindParam(':rol', $rol, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function eliminarUsuarioPorId($idUsuario) {
        $query = "DELETE FROM usuarios WHERE IdU = :id";
        $stmt = $this->con_db->prepare($query);
        $stmt->bindParam(':id', $idUsuario, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllUsers() {
        try {
            $stmt = $this->con_db->prepare("SELECT * FROM usuarios");
            $stmt->execute();

            return $stmt->fetchAll();

        } catch (PDOException $e) {
            return -1;
        }
    }

    public function getUsuByNombre($username) {
        try {
            $stmt = $this->con_db->prepare("SELECT * FROM usuarios WHERE nusuario= :usuario");
            $stmt->bindValue(':usuario', $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);

            if($result) {
                return $result;
            } else {
                $error="(No se encontró ningún usuario con el nombre: $username)";
                return $error;
            }
        } catch (PDOException $e){
            // Aquí podrías lanzar una excepción o registrar el error
            return -1;
        }
    } 
}

?>
