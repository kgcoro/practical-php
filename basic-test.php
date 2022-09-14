<?php

$altura = readline('Ingrese un numero: ');
arbol($altura);

/* for ($i=1; $i <= $altura; $i++) { 
    for ($j=1; $j <= $i ; $j++) { 
        echo "*";
    }
    echo "\n";
} */

function arbol($dato) {
    for ($i=1; $i <= $dato; $i++) { 
        echo str_repeat('*', $i) . "\n";
    }
}