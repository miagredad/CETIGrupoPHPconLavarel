<?php

class Producto
{
    public function __construct(
        public string $nombre,
        public float $precio,
    )
    {
        
    }

    public function describir(): string
    {
        return "{$this->nombre} S/ {$this->precio}";
    }
}

$teclado = new Producto("Teclado mecanico", 179.9);

// echo "{$teclado->producto}\n";
echo "{$teclado->describir()}\n";

class ProductoDigital extends Producto
{            
    public function __construct(
        public string $nombre,
        public float $precio,
        public int $stock,
    ) {        
    }
    #[Override]
    public function describir(): string
    {
        //parent es clase padre (producto)
        return parent::describir() . " a pedido"; 
    }
}

$iphone = new ProductoDigital("iPhone 18 PRO Max", 5000, 150);

echo "{$iphone->describir()}\n";