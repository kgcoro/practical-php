<?php

print_r($_REQUEST);
$palabras = array("sol", "luna", "cielo");

if ($_REQUEST["palabra0"] == $palabras[0])
    echo "palabra correcta \n";
else
    echo "palabra incorrecta ";

if ($_REQUEST["palabra1"] == $palabras[1])
    echo "palabra correcta \n";
else
    echo "palabra incorrecta ";

if ($_REQUEST["palabra2"] == $palabras[2])
    echo "palabra correcta \n";
else
    echo "palabra incorrecta ";
