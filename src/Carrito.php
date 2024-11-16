<?php 
include_once "Pedido.php";
class Carrito {
    private $cesta = [];

    public function getCesta() {
        return $this->cesta;
    }

    public function agregarProducto(Producto $pedido) {
        array_push($this->cesta, $pedido);
    }

    public function calcularTotal() {
        $suma = 0;
        foreach ($this->cesta as $producto) {
            $suma += $producto->getPrecio();
        }
        return $suma;
    }
}
?>