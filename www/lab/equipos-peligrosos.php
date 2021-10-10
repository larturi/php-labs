<?php

// Recibe un string 011111110101001
// Devuelve Yes si hay 7 consecutivos (ceros o unos)

function equiposPeligrosos($cadena) {

    $countConsecutives = 0;

    for ($i=0; $i < strlen($cadena) - 1 ; $i++) { 

        if ($countConsecutives != 0) {
            $previousChar = substr($cadena, $i-1, 1);
        } else {
            $previousChar = substr($cadena, $i, 1);
        }

        $char = substr($cadena, $i, 1);

        if ($char == $previousChar) {
            $countConsecutives++;
        } else {
            $countConsecutives = 1;
        }

        if ($countConsecutives >= 7) {
            echo 'Equipo ' . $cadena . ': Yes';
            echo '<br/>';
            return;
        }

    }

    if ($countConsecutives < 7) {
        echo 'Equipo ' . $cadena . ': No';
        echo '<br/>';
        return;
    }
}

equiposPeligrosos("011111110101001");
equiposPeligrosos("110000000001001");
equiposPeligrosos("010101010101010");
equiposPeligrosos("111000111000101");
equiposPeligrosos("100000000011111");
equiposPeligrosos("001010001001010");
equiposPeligrosos("111001110011100");
equiposPeligrosos("111111111111100");

