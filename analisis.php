<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");
echo "<br>";

for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra".$i] == $palabras[$i]) {
        echo "Palabra correcta" . "<br><br>";
    } else {
        echo "Palabra incorrecta, la palabra correcta es: " . $palabras[$i] . "<br><br>";
    }
}
