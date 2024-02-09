<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Facturación</title>
</head>
<body>
    <h1>Sistema de Facturación</h1>
    
    <h2>Agregar Cliente</h2>
    <form action="agregar_cliente.php" method="POST">
        Nombre: <input type="text" name="nombre_cliente"><br>
        Dirección: <input type="text" name="direccion_cliente"><br>
        Teléfono: <input type="text" name="telefono_cliente"><br>
        <input type="submit" value="Agregar Cliente">
    </form>
    
    <h2>Agregar Producto</h2>
    <form action="agregar_producto.php" method="POST">
        Nombre: <input type="text" name="nombre_producto"><br>
        Precio: <input type="text" name="precio_producto"><br>
        <input type="submit" value="Agregar Producto">
    </form>
    
    <h2>Crear Factura</h2>
    <form action="crear_factura.php" method="POST">
        Cliente ID: <input type="text" name="cliente_id"><br>
        Producto ID: <input type="text" name="producto_id"><br>
        Cantidad: <input type="text" name="cantidad"><br>
        <input type="submit" value="Crear Factura">
    </form>
    
    <h2>Facturas</h2>
    <ul>
        <?php include 'mostrar_facturas.php'; ?>
    </ul>
</body>
</html>
