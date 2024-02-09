<?php
include_once 'config.php'; // Asegúrate de que config.php contiene la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_id = $_POST["cliente_id"];
    $producto_id = $_POST["producto_id"];
    $cantidad = $_POST["cantidad"];

    try {
        // Preparar y ejecutar la consulta SQL para agregar una nueva factura
        $stmt = $db->prepare("INSERT INTO facturas (cliente_id, producto_id, cantidad) VALUES (:cliente_id, :producto_id, :cantidad)");
        $stmt->bindParam(':cliente_id', $cliente_id);
        $stmt->bindParam(':producto_id', $producto_id);
        $stmt->bindParam(':cantidad', $cantidad);
        $stmt->execute();
        
        // Redireccionar de vuelta al index.php después de crear la factura
        header("Location: index.php");
        exit(); // Asegurarse de que el script termine después de redireccionar
    } catch (PDOException $e) {
        echo "Error al crear la factura: " . $e->getMessage();
        // Manejar cualquier error que ocurra durante la ejecución de la consulta SQL
    }
}
?>
