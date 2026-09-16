<?php

echo "Operador aritmetico\n";

$numero1 = 18;
$numero2 = 7;

var_dump("suma de numero 1 y numero 2", $numero1 + $numero2) ;
var_dump("resta de numero 1 y numero 2", $numero1 - $numero2) ;
var_dump("multiplicacion de numero 1 y numero 2", $numero1 + $numero2) ;
var_dump("division de numero 1 y numero 2", $numero1 / $numero2) ;
var_dump("residuo de numero 1 y numero 2", $numero1 % $numero2) ;

echo "Operador comparación\n";

echo "--------\n";
var_dump(18 == '18');
var_dump(18 === '18');

echo "--------\n";
var_dump($numero1) == $numero2;
var_dump($numero1 > $numero2);
var_dump($numero1 < $numero2);
var_dump($numero1 >= 18);
var_dump($numero1 <= 18);

$edad = 17;
var_dump($edad >= 18);

echo "el &&\n";  /* and */ 
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

echo "el ||\n"; /* or */
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "Ejemplo de mayores de 15 años e inscritos al curso";
$edad = 16;
$es_mayor_15 = $edad >=15;
$esta_inscrito = false;

var_dump($es_mayor_15 && $esta_inscrito);

echo "Comparacion de negacion\n";

var_dump($esta_inscrito);
var_dump(!$esta_inscrito); 

echo "Operacion de concatenacion\n";

echo "Hola" . "mundo\n";

$nombre = "Len";
echo "Hola, que tal " . $nombre . "\n";
echo "Hola, que tal {$nombre}\n";
echo "Hola, que tal $nombre\n";
echo 'Hola, que tal $nombre\n';
echo 'Hola, que tal {$nombre}\n';

echo "\n";