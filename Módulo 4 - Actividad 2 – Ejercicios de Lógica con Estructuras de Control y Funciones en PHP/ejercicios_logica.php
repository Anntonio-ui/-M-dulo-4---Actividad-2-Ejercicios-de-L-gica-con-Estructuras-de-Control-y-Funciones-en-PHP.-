<?php
// ================================
// Problema 1: Serie de Fibonacci
// ================================
function generarFibonacci($n) {
    $fibonacci = []; // arreglo para guardar los números de la serie
    
    // Primeros dos términos de la serie
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $n; $i++) {
        $fibonacci[] = $a; // agregamos el valor actual
        $temp = $a + $b;   // sumamos los dos anteriores
        $a = $b;           // actualizamos valores
        $b = $temp;
    }

    return $fibonacci;
}

// Ejemplo: Generar los primeros 10 números de Fibonacci
echo "Serie de Fibonacci (10 términos):\n";
print_r(generarFibonacci(10));


// ================================
// Problema 2: Números Primos
// ================================
function esPrimo($numero) {
    // Casos base
    if ($numero <= 1) {
        return false; // 0 y 1 no son primos
    }

    // Verificamos divisores desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si tiene un divisor, no es primo
        }
    }

    return true; // Si no encontró divisores, es primo
}

// Ejemplo: Verificar si un número es primo
$numero = 29;
echo "\n¿$numero es primo? " . (esPrimo($numero) ? "Sí" : "No") . "\n";


// ================================
// Problema 3: Palíndromos
// ================================
function esPalindromo($cadena) {
    // Normalizamos la cadena: eliminamos espacios y convertimos a minúsculas
    $cadena = strtolower(str_replace(' ', '', $cadena));

    // Comparamos la cadena original con su inversa
    return $cadena === strrev($cadena);
}

// Ejemplo: Verificar si una palabra es palíndromo
$palabra = "Anita lava la tina";
echo "\n¿'$palabra' es palíndromo? " . (esPalindromo($palabra) ? "Sí" : "No") . "\n";
?>
