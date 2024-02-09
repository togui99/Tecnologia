<?php
class Factura {
    public $id;
    public $cliente;
    public $producto;
    public $cantidad;

    public function __construct($id, $cliente, $producto, $cantidad) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->producto = $producto;
        $this->cantidad = $cantidad;
    }

    public function calcularTotal() {
        return $this->producto->precio * $this->cantidad;
    }
}
?>
