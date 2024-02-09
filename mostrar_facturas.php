<?php
include 'config.php';

try {
    // Consulta SQL para obtener las facturas con información relacionada de clientes y productos
    $stmt = $db->query("SELECT f.id, f.cantidad, c.nombre AS nombre_cliente, p.nombre AS nombre_producto, p.precio 
                        FROM facturas f 
                        JOIN clientes c ON f.cliente_id = c.id 
                        JOIN productos p ON f.producto_id = p.id");
    $facturas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar las facturas en formato de lista
    foreach ($facturas as $factura) {
        $total = $factura['precio'] * $factura['cantidad'];
        echo "<li>Factura " . $factura['id'] . " - Cliente: " . $factura['nombre_cliente'] . ", Producto: " . $factura['nombre_producto'] . ", Cantidad: " . $factura['cantidad'] . ", Total: $" . $total . "</li>";
    }
} catch (PDOException $e) {
    echo "Error al obtener las facturas: " . $e->getMessage();
}
?>

