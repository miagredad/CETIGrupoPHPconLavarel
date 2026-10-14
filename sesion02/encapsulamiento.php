<?php

class Producto
{
    public function __construct(
        public string $nombre,
        protected float $precio,
    )    
    {
     
    }

    //setters : sirve para asignar valores a propiedades de los datos protegidos

    public function setPrecio(float $precio) : void
    {
        if($precio >=0) {
            $this->precio = $precio;            
        } else {
            $this->precio = 0;
        }
        
    }

    // getters : retornar los valores protegidos

    public function getPrecio() : float
    {
        return $this->precio;
    }

    
}

$laptop = new Producto ("Mac Airbook 14", 3500);
$nuevo_valor = -3400;

$laptop->setPrecio($nuevo_valor);

echo "{$laptop->getPrecio()}\n";


class Cliente {

    public function __construct(
        protected string $nombre,
        protected string $apellido,
    )
    {
        
    }

    public function getNombre(): string
    {
        return $this->nombre;        
    }

    public function getApellido(): string
    {
        return $this->apellido;        
    }

    public function getNombreCompleto(): string
    {
        return "{$this->getNombre()} {$this->getApellido()}\n";
    }
}

    $len = new Cliente ("Len", "Idem");

    echo  "{$len->getNombreCompleto()}\n";


