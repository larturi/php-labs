<?php

function fibonacci($n) {
    // A partir de un entero, devuelve los primeros n numeros de Fibonacci

    $arr = [];
    $arr[0] = 1;
    $arr[1] = 1;

    for ($i=2; $i < $n; $i++) { 
        $arr[$i] = $arr[$i-2] + $arr[$i-1];
    }

    return $arr;
}

function isFibonacci($arr) {
    // A partir de un array de enteros, devuelve en cada posicion 1 o 0 
    // si el elemento es un numero de Fibonacci

    // Armo el array de Fibonacci hasta la posicion 100
    $fibo = fibonacci(40);

    // Array con los resultados
    $result = [];

    for ($i=0; $i < count($arr); $i++) { 
        $result[$i] = 0;
        foreach($fibo as $f) {
            if($arr[$i] == $f) {
                $result[$i] = 1;
            }
        }
    } 

    return $result;
}


$result = isFibonacci([3, 1, 44, 56, 55, 13, 21, 454]);

echo '<pre>'; print_r($result); echo '</pre>';
