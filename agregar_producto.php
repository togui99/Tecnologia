<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre_producto"];
    $precio = $_POST["precio_producto"];
    try {
        // Preparar y ejecutar la consulta SQL para agregar un nuevo cliente
        $stmt = $db->prepare("INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);
       
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Error al agregar el cliente: " . $e->getMessage();
        exit;
    }

    // Redireccionar de vuelta al index.php después de agregar el cliente
    header("Location: index.php");
}
?>

