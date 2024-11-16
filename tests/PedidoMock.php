<?php
use PHPUnit\Framework\TestCase;
//include_once "../src/Producto.php";
//include_once "../src/Carrito.php";
//include_once "../src/Pedido.php";

class PedidoMock extends TestCase {
    public function testPedidoMock() {
        $carritoMock = $this->createMock(Carrito::class);
        $carritoMock->method('calcularTotal')->willReturn(200);
        $pedido = new Pedido($carritoMock);
        $resultado = $pedido->calcularTotalConDescuento();
        $this->assertEquals(180.0, $resultado, "El total con descuento no es correcto");
    }
}
?>