<?php

class Producto {
    // [visibilidad] [tipo] [propiedad] = [valor por defecto];
    public string $nombre = 'Sin nombre';
    public float $precio = 0;
}

class Cliente {
    public string $nombre = '';

    // para crear metodos
    // [visibilidad] [static] function [nombre del metodo]([tipo] [variable] : [tipo de retorno]{})     

    public function saludar() : string
    {
        return "Hola, soy {$this->nombre}";
    }
}

//$laptop = new Producto();

var_dump($laptop);

//$ana = new Cliente();
//$ana->nombre = 'Ana';
//$jorge = new Cliente();
//$jorge->nombre = 'Jorge';


echo $laptop->nombre . "\n";
//echo $ana->saludar() . "\n";
//echo $jorge->saludar() . "\n";

class Vendedor 
{
    public string $nombre= '';
    public string $email= '';

    public function __construct(string $nombre, string $email)
    {    
        $this->nombre = $nombre;
        $this->email = $email;    
    }

    public function saludar() : string
    {
        return "Hola, soy {$this->nombre}";
    }

}

$pedro = new Vendedor("Pedro", "pedro@gmail.com");
echo $pedro->saludar() . "\n";

class Admin
{
    public function __construct(
        public string $nombre= '',
        public string $email= '',
        public bool $inactivo = false,
        string $depurar = '',
    )
    {
        
    }

    public function saludar() : string
    {
        return "Hola, soy {$this->nombre}, un administrador";
    }

}

$len = new Admin("Len", "len@gmail.com");
echo $len->saludar() . ".\n";
var_dump($len->inactivo);
$luna = new Admin("luna", "luna@gmail.com", true);
var_dump($luna->inactivo);
//var_dump($luna->depurar);

