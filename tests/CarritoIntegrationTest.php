<?php
use PHPUnit\Framework\TestCase;
include_once "../src/Producto.php";
include_once "../src/Carrito.php";

class CarritoIntegrationTest extends TestCase {
    private Carrito $carrito;

    public function __construct() {
        $this->carrito = new Carrito();
    }
    public function testAgregarCarrito() {
        $producto1 = new Producto('Silla', 31.20);
        $producto2 = new Producto('Alfombra', 12.03);
        $this->carrito->agregarProducto($producto1);
        $this->carrito->agregarProducto($producto2);
        return $this->carrito->calcularTotal();
    }
}
?>