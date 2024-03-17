<?php
class Database {
    
    public static function connect() {
        $host = 'mariadb'; // Nombre del host de la base de datos
        $dbname = 'database'; // Nombre de la base de datos
        $username = 'root'; // Nombre de usuario de la base de datos
        $password = 'changepassword'; // Contraseña de la base de datos

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8mb4';
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $dbh = new PDO($dsn, $username, $password, $options);
            return $dbh;
        } catch (PDOException $e) {
            // En caso de error en la conexión, mostrar mensaje
            echo 'Error de conexión: ' . $e->getMessage();
            return null; // Devolver null si hay un error de conexión
        }
    }
}

?>
