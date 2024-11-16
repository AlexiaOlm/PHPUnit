<?php
class Producto {
    private string $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getPrecio() {
        return $this->precio;
    }
}
?>