<?php
use PHPUnit\Framework\TestCase;
include_once "../src/Producto.php";
include_once "../src/Carrito.php";
include_once "../src/Pedido.php";

class PedidoFunctionalTest extends TestCase {
    private Pedido $pedido;
    
    public function testCalcularTotalConDescuento() {
        $carrito = new Carrito();
        $producto1 = new Producto('Teléfono', 120.5);
        $producto2 = new Producto('Camisa', 24);
        $carrito->agregarProducto($producto1);
        $carrito->agregarProducto($producto2);

        $this->pedido = new Pedido($carrito);
        $resultado = $this->pedido->calcularTotalConDescuento();
        $this->assertEquals(130.05, $resultado, "El resultado del 10% no se aplicó correctamente");
    }

    public function testCalcularTotalSinDescuento() {
        $carrito = new Carrito();
        $producto1 = new Producto('Bufanda', 12.2);
        $producto2 = new Producto('Camisa', 24);
        $carrito->agregarProducto($producto1);
        $carrito->agregarProducto($producto2);

        $this->pedido = new Pedido($carrito);
        $resultado = $this->pedido->calcularTotalConDescuento();
        $this->assertEquals(36.2, $resultado, "El resultado del 10% no se aplicó correctamente");
    
    }
}
?>