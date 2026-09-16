

<?php

echo "Convertir grados Celcius a Fahrenheit\n";

function cel_a_fah (float $celcius) : float {
    return ($celcius * 1.8) + 32;
}

$valorC = 20;
$valorF = cel_a_fah ($valorC);

echo "{$valorC}°C equivale a {$valorF}°F\n";


echo "FizzBuzz\n";

for ($i = 1; $i <= 100 ; $i++) {
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzBuzz\n";    
    } elseif ($i % 3 == 0) {
    echo "Fizz\n";
    } elseif ($i % 5 == 0) {
    echo "Buzz\n";
    } else {
    echo "$i\n";
    }
}