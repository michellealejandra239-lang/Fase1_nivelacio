<?php

$nombre = "Michelle";
$edad = 16;
echo "Mi nombre es $nombre y tengo $edad años <br><br>";

$num1 = 10;
$num2 = 5;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

echo "Suma: $suma <br>";
echo "Resta: $resta <br>";
echo "Multiplicación: $multiplicacion <br>";
echo "División: $division <br><br>";

$nota = 4;

if ($nota >= 3) {
    echo "Aprobaste <br><br>";
} else {
    echo "Reprobaste <br><br>";
}

$dia = 3;

switch ($dia) {

    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    case 3:
        echo "Miércoles";
        break;

    default:
        echo "Día no válido";
}

?>