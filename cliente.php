<?php
class Cliente {
    public $id;
    public $nombre;
    public $direccion;
    public $telefono;

    public function __construct($id, $nombre, $direccion, $telefono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }
}
?>
