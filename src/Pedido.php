<?php
include_once "Carrito.php";
class Pedido {
    private Carrito $carrito;
    public function __construct(Carrito $carrito) {
        $this->carrito = $carrito;
    }

    public function calcularTotalConDescuento() {
        $precioTotal = $this->carrito->calcularTotal();
        if($precioTotal > 100) {
            $precioTotal = $precioTotal - ($precioTotal * 0.1);
            return $precioTotal;
        } else {
            return $precioTotal;
        }
    }
}
?>