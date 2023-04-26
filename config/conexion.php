<?php
// Variables de conexión a la base de datos
$host = "localhost";
$dbname = "prueba_marabunta";
$username = "root";
$password = "";

// Crear una conexión PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO en excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
catch(PDOException $e) {
    echo "Error al conectarse a la base de datos: " . $e->getMessage();
}
?>
