<?php
use PHPUnit\Framework\TestCase;
include_once "../src/Producto.php";

class ProductoTest extends TestCase {
    public function testGetNombre() {
        $producto = new Producto("Televisor", 400);
        $nombre = $producto->getNombre();
        $this->assertEquals("Televisor", $nombre, "El método getNombre no devuelve el nombre correcto.");
    }

    public function testGetPrecio() {
        $producto = new Producto("Televisor", 400);
        $precio = $producto->getPrecio();
        $this->assertEquals(400, $precio, "El método getPrecio no devuelve el precio correcto.");
    }
}
?>
