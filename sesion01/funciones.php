<?php declare(strict_types = 1);

var_dump((string) true);

function saludar(
    string $nombre,
    string $inicio = "Hola"
): mixed {
    return "{$inicio}, {$nombre}";

}

$mensaje = saludar("Len" , "Feliz cumpleaños");

var_dump($mensaje);

// ------------------------

function hola(
    ?string $nombre,
    string|null $variable1,
    string|int|float $variable2,
    mixed $variable3,
    string $inicio = "Hola"
): mixed {
    return "{$inicio}, {$nombre}";
}
    
function hola1()
{
    echo "Funcion hola\n";
    return false;
}

function saludar2()
{
    echo "Funcion saludar\n";
    return true;
}

var_dump(hola1() || saludar2());

$y = 0;

function habito(){
    $y = 15;
    return "Hola";
}
habito();

var_dump($y);
