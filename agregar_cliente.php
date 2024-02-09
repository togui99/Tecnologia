<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre_cliente"];
    $direccion = $_POST["direccion_cliente"];
    $telefono = $_POST["telefono_cliente"];

    try {
        // Preparar y ejecutar la consulta SQL para agregar un nuevo cliente
        $stmt = $db->prepare("INSERT INTO clientes (nombre, direccion, telefono) VALUES (:nombre, :direccion, :telefono)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error al agregar el cliente: " . $e->getMessage();
        exit;
    }

    // Redireccionar de vuelta al index.php después de agregar el cliente
    header("Location: index.php");
}
?>

